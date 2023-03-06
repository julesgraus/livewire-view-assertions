<?php

namespace JulesGraus\LivewireViewAssertions;

use Livewire\LivewireServiceProvider as OriginalLivewireServiceProvider;

class LivewireServiceProvider extends OriginalLivewireServiceProvider
{
    protected function registerLivewireSingleton()
    {
        $this->app->singleton(LivewireManager::class);
        $this->app->alias(LivewireManager::class, 'livewire');
    }
}
