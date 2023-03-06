<?php

namespace JulesGraus\LivewireViewAssertions;

use Exception;
use JulesGraus\LivewireViewAssertions\Testing\TestableLivewire;
use Livewire\LivewireManager as OriginalLivewireManager;

class LivewireManager extends OriginalLivewireManager
{
    /**
     * @throws Exception
     */
    public function test($name, $params = [])
    {
        return new TestableLivewire($name, $params, $this->queryParamsForTesting);
    }
}
