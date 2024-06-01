@props(['label' => '', 'icon' => null])

<div>
    <label class="q-field row no-wrap items-start q-field--filled q-field--float q-field--labeled q-field--dark q-field--auto-height">
        <div class="q-field__inner relative-position col self-stretch">
            <div class="q-field__control relative-position row no-wrap" tabindex="-1">
                @if($icon)
                    <div class="q-field__prepend q-field__marginal row no-wrap items-center">
                        <i class="q-icon notranslate material-icons" aria-hidden="true" role="presentation">{{ $icon }}</i>
                    </div>
                @endif
                <div class="q-field__control-container col relative-position row no-wrap q-anchor--skip">
                    <div class="q-field__native row" tabindex="-1" type="text">
                        <input {{ $attributes->wire('model') }} class="q-field__input text-left" label="{{ $label }}">
                    </div>
                    <div class="q-field__label no-pointer-events absolute ellipsis">{{ $label }}</div>
                </div>
            </div>
        </div>
    </label>
</div>
