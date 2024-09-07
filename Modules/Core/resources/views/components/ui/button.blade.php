@props(['color'])

<button
    {{ $attributes }}
    type="button"
    class="inline-block rounded bg-{{$color}} px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-{{$color}}-3 transition duration-150 ease-in-out hover:bg-{{$color}}-accent-300 hover:shadow-{{$color}}-2 focus:bg-{{$color}}-accent-300 focus:shadow-{{$color}}-2 focus:outline-none focus:ring-0 active:bg-{{$color}}-600 active:shadow-{{$color}}-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
    {{ $slot }}
</button>
