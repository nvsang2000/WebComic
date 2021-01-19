<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\danhmuc;
use App\theloai;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view) {
            $danhmuc = danhmuc::all();
            $view->with('danhmuc',$danhmuc);
        });
        view()->composer('header',function($view) {
            $theloai = theloai::all();
            $view->with('theloai',$theloai);
        });
        view()->composer('admin/theloai/them',function($view) {
            $danhmuc = danhmuc::all();
            $view->with('danhmuc',$danhmuc);
        });
        view()->composer('admin/truyen/them',function($view) {
            $danhmuc = danhmuc::all();
            $view->with('danhmuc',$danhmuc);
        });
        view()->composer('admin/truyen/them',function($view) {
            $theloai = theloai::all();
            $view->with('theloai',$theloai);
        });
    }
}
