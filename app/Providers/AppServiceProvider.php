<?php

namespace App\Providers;

use App\Models\RightModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //
        $menus =  RightModel::where('type',1)->orderBy('idx','desc')->get();
        foreach($menus as &$menu){
            $menu->items = RightModel::where('parentId',$menu->id)->where('type',2)->orderBy('idx','desc')->get();
        }
        View::share('menus', $menus);
    }
}
