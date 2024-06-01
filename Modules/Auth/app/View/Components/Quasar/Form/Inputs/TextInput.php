<?php

namespace Modules\Auth\app\View\Components\Quasar\Form\Inputs;

use Illuminate\View\Component;
use Illuminate\View\View;

class TextInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('auth::components.quasar.form.inputs.text-input');
    }
}
