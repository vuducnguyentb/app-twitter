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

Cài vuex
`npm install vuex`

Cài vue-observe-visibility để phát hiện khi 1 phần tử trở nên hiện thị hoặc ẩn đi tren trang web
`npm install --save vue-observe-visibility`
