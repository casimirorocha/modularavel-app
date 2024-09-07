<?php

namespace Modules\Auth\App\View\Components\Forms;

use Illuminate\View\Component;
use Illuminate\View\View;

class Login extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected string $variant = 'L1', protected ?array $options = [])
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('auth::components.forms.login.index', [
            'variant' => strtoupper($this->variant),
            'options' => (object) $this->options,
        ]);
    }
}
