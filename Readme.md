# Livewire 2 view assertions
The current [Laravel Livewire](https://laravel-livewire.com) test functionalities for version 2 don't have assertions that allow you to 
check if a property or action form a Livewire component actually are bound to the view of a
[Laravel Livewire](https://laravel-livewire.com) component.

With this package you'll get a couple of extra assertions you can use to do so. 
I've created a discussion and pull request too to the [Livewire GitHub repository](https://github.com/livewire/livewire). So in the near feature,
i hope that you can use these assertions directly from the Livewire package itself. Or just simply ask. I will then be abl

## Installation instructions
Using composer:
```composer require julesgraus/livewire-view-assertions```

## Usage
In your tests, use the ```JulesGraus\LivewireViewAssertions\Livewire``` facade like so for example:

```php
//Other imports here
use JulesGraus\LivewireViewAssertions\Livewire

class TestableLivewireViewBindingsTest extends TestCase
{
    public function test_asserts_all_properties_are_bound()
    {
        Livewire::test(SomeComponent::class)
            ->assertPropertyBound('foo')
            ->assertPropertyBound('bar', 2);
    }
}
```

## Assertions overview
This package gives you the following assertions. If after reading their descriptions below, it still isn't clear on how 
to use them, please have a [look at the tests](tests/Unit/TestableLivewireViewBindingsTest.php) in this package.

### assertPropertyBound
Assert that a property is bound using a ```wire:model``` attribute in the blade template of the component. 

The first parameter must be the name of the property you want to check.
The second parameter checks how often the property must be bound. If you omit it or set it to null, it
will check if it is at least bound once.

### assertPropertyNotBound 
Asserts that a property isn't bound using a ```wire:model``` attribute in the blade template of the component.

The first parameter must be the name of the property you want to check.

### assertActionBound
Assert that an action is bound using a ```wire:[dispatched browser event]``` attribute in the blade template of the component.

The first parameter must be the name of the action you want to check.
The second parameter checks how often the action must be bound. If you omit it or set it to null, it
will check if it is at least bound once.

### assertPropertyNotBound
Asserts that an action isn't bound using a ```wire:[dispatched browser event]``` attribute in the blade template of the component.

The first parameter must be the name of the action you want to check.
