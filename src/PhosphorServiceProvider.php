<?php

namespace FilamentIcons\Phosphor;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class PhosphorServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->make(Factory::class)->add('phosphor', [
            'path' => __DIR__.'/../resources/icons',
            'prefix' => 'phosphor',
        ]);
    }
}
