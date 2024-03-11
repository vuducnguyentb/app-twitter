<?php

namespace App\Http\Controllers\Api\Tweets;

use App\Http\Controllers\Controller;
use App\Utilities\TweetType;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('store');
    }

    public function store(Request $request)
    {
       return $request->user()
            ->tweets()
            ->create(array_merge(
                $request->only('body'),
                ['type' => TweetType::TWEET]
            ));
    }
}
