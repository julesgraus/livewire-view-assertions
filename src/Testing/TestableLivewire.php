<?php

namespace JulesGraus\LivewireViewAssertions\Testing;

use JulesGraus\LivewireViewAssertions\Testing\Concerns\MakesAssertionsOnView;
use Livewire\Testing\TestableLivewire as OriginalTestableLivewire;

class TestableLivewire extends OriginalTestableLivewire
{
    use MakesAssertionsOnView;
}
