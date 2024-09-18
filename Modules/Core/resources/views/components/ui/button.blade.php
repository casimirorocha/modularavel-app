@props(['bgColor'])

<button
    {{ $attributes->class([
        "bg-$bgColor",
        "shadow-$bgColor-3",
        "active:bg-$bgColor-600",
        "active:shadow-$bgColor-2",
        "hover:bg-$bgColor-accent-300",
        "hover:shadow-$bgColor-2",
        "focus:bg-$bgColor-accent-300",
        "focus:shadow-$bgColor-2",
        "focus:outline-none",
        "focus:ring-0",
])->merge([
        'type' => 'submit',
        'class' => 'px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong'
    ]) }}> {{ $slot }} </button>
