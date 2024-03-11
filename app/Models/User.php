<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function avatar(): string
    {
        return "https://gravatar.com/avatar/'.md5($this->email).'?d=mp";
    }

    #1 người dùng có nhiều follow
    public function followings(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'following_id');
    }

    #lấy tất cả người dùng mà người dùng hiện tại đang theo dõi
    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'followers', // đây là bảng trung gian(pivot table) sẽ được sử dụng
            'following_id', //tên cuả cột khóa ngoại trong bảng trung gian lk vs model User
            'user_id' //khóa ngoại trong bảng trung gian lk với model user
        );
    }

    //lấy ra những tweet của những user follow user
    public function followingTweets(): HasManyThrough
    {
        return $this->hasManyThrough(
            Tweet::class, //model cuối cùng mà ta muốn thu thập dữ liệu
            Follower::class, //moder trung gian
            'user_id', //khóa ngoại bảng trung gian
            'user_id', //khoảng ngoại của bảng muốn gọi tới
            'id', // trường mà ta muốn liên kết ở bảng đang sử dụng
            'following_id' //trường mà cta liên kết ở bảng trung gian
        );
    }

    #nhiều tweets(bài đăng)
    public function tweets(): HasMany
    {
        return $this->hasMany(Tweet::class);
    }
}
