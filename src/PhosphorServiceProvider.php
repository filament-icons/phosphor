<?php

namespace FilamentIcons\Phosphor;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class PhosphorServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $factory = $this->app->make(Factory::class);

        $factory->add('phosphor-bold', [
            'path' => __DIR__.'/../resources/icons/bold',
            'prefix' => 'phosphor-bold',
        ]);
        $factory->add('phosphor-duotone', [
            'path' => __DIR__.'/../resources/icons/duotone',
            'prefix' => 'phosphor-duotone',
        ]);
        $factory->add('phosphor-fill', [
            'path' => __DIR__.'/../resources/icons/fill',
            'prefix' => 'phosphor-fill',
        ]);
        $factory->add('phosphor-light', [
            'path' => __DIR__.'/../resources/icons/light',
            'prefix' => 'phosphor-light',
        ]);
        $factory->add('phosphor', [
            'path' => __DIR__.'/../resources/icons/regular',
            'prefix' => 'phosphor',
        ]);
        $factory->add('phosphor-thin', [
            'path' => __DIR__.'/../resources/icons/thin',
            'prefix' => 'phosphor-thin',
        ]);
    }
}
