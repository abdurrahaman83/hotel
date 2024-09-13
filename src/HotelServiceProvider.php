<?php
namespace Abdurrahaman\Hotel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class HotelServiceProvider extends ServiceProvider{

    public function register()
    {

    }
    public function boot()
    {
        require_once __DIR__ . '/../src/Helpers/helper.php';
        app()->singleton('plugins',function() {
            return Cache::rememberForever('modules',function(){
                return DB::table('plugins')->get();
            });
        });
    }




}

