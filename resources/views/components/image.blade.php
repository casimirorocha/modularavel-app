<div class="overflow-hidden relative">
    <div
        style="background-image: url('{{ $publicUrl }}')"
        {{ $attributes->merge(['class' => "w-full min-h-[250px] bg-cover bg-center relative scale-100 transition-all duration-500 hover:scale-150"]) }}
    >
    </div>

    {{ $slot }}
</div>
