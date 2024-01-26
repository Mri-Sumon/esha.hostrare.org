<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;


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

        if (config('app.env') === 'production' || config('app.env') === 'staging') {
            URL::forceScheme('https');
        }
        
        \Blade::directive('baseurl', function () {
            return URL::to('/');
        });
        \Blade::directive('themedir', function () {
            return URL::to('/').'/application/resources/views/themes';
        });
        \Blade::directive('login', function () {
            return '<a href="'.URL::to('/').'/login" target="_blank"> Admin Login </a>';
        });
        \Blade::directive('theme', function () {
            $theme=\DB::table('themes')->where('isdefault','active')->first();
            if($theme){
                return $theme->slug;
            }else{
                return 'starter';
            }
        });
        \Blade::directive('settings', function ($value) {
            $settings=\DB::table('settings')->first();
            if($value=='logo'){
                return '<img src="'.URL::to('/').'/application/storage/app/settings/'.$settings->logo.'" alt="'.$settings->name.'" class="logo">';
            }elseif($value=='logourl'){
                return URL::to('/').'/application/storage/app/settings/'.$settings->logo;
            }elseif($value=='icon'){
                return '<img src="'.URL::to('/').'/application/storage/app/settings/'.$settings->icon.'" alt="'.$settings->name.'" class="icon">';
            }elseif($value=='iconurl'){
                return URL::to('/').'/application/storage/app/settings/'.$settings->icon;
            }elseif($value=='altlogo'){
                return '<img src="'.URL::to('/').'/application/storage/app/settings/'.$settings->altlogo.'" alt="'.$settings->name.'" class="altlogo">';
            }elseif($value=='altlogourl'){
                return URL::to('/').'/application/storage/app/settings/'.$settings->altlogo;
            }elseif($value=='name'){
                return $settings->name;
            }elseif($value=='tagline'){
                return $settings->tagline;
            }elseif($value=='tel'){
                return $settings->tel;
            }elseif($value=='mobile'){
                return $settings->mobile;
            }elseif($value=='email'){
                return $settings->email;
            }elseif($value=='address'){
                return $settings->address;
            }elseif($value=='link1'){
                return $settings->link1;
            }elseif($value=='link2'){
                return $settings->link2;
            }elseif($value=='link3'){
                return $settings->link3;
            }elseif($value=='link4'){
                return $settings->link4;
            }elseif($value=='link5'){
                return $settings->link5;
            }elseif($value=='link6'){
                return $settings->link6;
            }elseif($value=='map_link'){
                return $settings->map_link;
            }elseif($value=='copyright'){
                return $settings->copyright;
            }elseif($value=='office_hours'){
                return $settings->office_hours;
            }else{
                return $settings->name;
            }
        });
    }
}
