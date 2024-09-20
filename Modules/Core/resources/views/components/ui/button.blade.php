@props(['bgColor' => '', 'label' => null])

<button
    {{ $attributes->class([
        "bg-".$bgColor => true,
        "shadow-".$bgColor."-3" => true,
        "active:bg-".$bgColor."-600" => true,
        "active:shadow-".$bgColor."-2" => true,
        "hover:bg-".$bgColor."-accent-300" => true,
        "hover:shadow-".$bgColor."-2" => true,
        "focus:bg-".$bgColor."-accent-300" => true,
        "focus:shadow-".$bgColor."-2" => true,
        "focus:outline-none",
        "focus:ring-0",
])->merge([
        'type' => 'submit',
        'data-twe-ripple-init' => true,
        'class' => 'px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong'
    ]) }}> {{ $label ?? $slot }} </button>
