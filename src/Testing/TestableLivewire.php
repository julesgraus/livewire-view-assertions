<?php

namespace JulesGraus\LivewireViewAssertions\Testing;

use JulesGraus\LivewireViewAssertions\Testing\Concerns\MakesAssertionsOnView;
use Livewire\Testing\Concerns\HasFunLittleUtilities;
use Livewire\Testing\Concerns\MakesAssertions;
use Livewire\Testing\Concerns\MakesCallsToComponent;
use Livewire\Testing\TestableLivewire as OriginalTestableLivewire;

class TestableLivewire extends OriginalTestableLivewire
{
    //The only needed trait that MUST be imported here is the MakesAssertionsOnView one.
    //The other ones are imported in the parent. We still import them here too intentionally.
    //This is due to the fact that the "set" method is a method in the MakesCallToComponent trait and if
    //we don't import it here, the $this variable inside of that trait will refer to the parent component
    //instead of this one. Because the parent would be the only one importing it directly.

    use MakesAssertions,
        MakesAssertionsOnView,
        MakesCallsToComponent,
        HasFunLittleUtilities;
}
