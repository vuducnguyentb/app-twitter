Cài laravel/ui

`composer require laravel/ui`

`php artisan ui vue --auth`

Sau đó chạy:

`[npm install && npm run dev] `

.env
`SESSION_DOMAIN = domain`
`SANCTUM_STATEFUL_DOMAINS = domain`
`SESSION_DRIVER = cookie`

app/Http/Kernel.php
`Mở comment middleware sanctum ra`
