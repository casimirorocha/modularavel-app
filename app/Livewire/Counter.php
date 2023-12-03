<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;
use Illuminate\View\View;

class Counter extends Component
{
    #[Locked]
    public int $count;

    /*
    |--------------------------------------------------------------------------
    | Locking the property from modified on the client-side.
    |--------------------------------------------------------------------------
    |
    | Livewire also allows you to 'lock' properties in order to prevent
    | properties from being modified on the client-side. You can 'lock'
    | a property from client-side manipulation using the attribute: #[Locked]
    |
    | #[Locked]
    | public $var
    |
    | Now, if a user tries to modify on the front end, an error will be
    | thrown.$id
    |
    */
    #[Locked]
    public $id;

    /*
    |--------------------------------------------------------------------------
    | Set initial values for properties
    |--------------------------------------------------------------------------
    |
    | @return void
    |
    */
    public function mount(): void
    {
        $this->count = 10;
    }

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }

    public function render(): View|string
    {
        return view('livewire.counter');
    }
}
