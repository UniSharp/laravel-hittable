<?php
namespace Unisharp\Hittable;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class HittableServiceProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
       Event::subscribe('hit', 'Unisharp\Listeners\HitListener');
    }
}
