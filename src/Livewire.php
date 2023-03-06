<?php


namespace JulesGraus\LivewireViewAssertions;

use Illuminate\Support\Facades\Facade;
use JulesGraus\LivewireViewAssertions\Testing\TestableLivewire;

/**
 * @method static void component($alias, $viewClass)
 * @method static TestableLivewire test($name, $params = [])
 * @method static LivewireManager actingAs($user, $driver = null)
 * @method static LivewireManager withQueryParams($queryParams)
 *
 * @see LivewireManager
 */
class Livewire extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'livewire';
    }
}
