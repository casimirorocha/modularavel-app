<?php

namespace Modules\Auth\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('auth::layouts.master', ['options' => []])]
#[Title('Xxx')]
class Register extends Component
{
    public function render(): View|string
    {
        return view('auth::livewire.register');
    }
}
