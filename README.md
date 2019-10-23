<h1 align="center"> sunriseqf-unit-laravel </h1>

<p align="center"> 方便与laravel框架中对于某一个类的方法调试；类似于单元测试.</p>


## 安装

```shell
$ composer require sunriseqf/sunriseqf-unit-laravel -vvv
```


##框架要求

Laravel >= 5.1


## Laravel 应用

在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5 无需手动注册)

'providers' => [
    Sunriseqf\JunitLaravel\JunitServiceProvide::class,
]

然后在浏览器中直接访问路由

Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store');
## License

MIT