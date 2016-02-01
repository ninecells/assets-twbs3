<?php

namespace NineCells\Assets\Twbs3;

use Illuminate\Support\ServiceProvider;

class Twbs3ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/resources/assets' => public_path('vendor/ninecells/assets-twbs3'),
        ], 'public');
    }

    public function register()
    {
    }
}
