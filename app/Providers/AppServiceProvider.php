<?php

namespace App\Providers;

use App\Models\Notification;
use App\Models\User;
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
        $notiUser = User::join('notifications', 'notifications.users_id', '=', 'users.id')->where('role_id', '=', 0)->take(4)->get();
        $countNoti = Notification::where('role_id', '=', 0)->get()->count();
    
        view()->share('destination',  $notiUser);
        view()->share('count',  $countNoti);

    }
}
