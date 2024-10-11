<div>
    <div class="flex mw-100 bg-gray-900 items-center justify-center fixed start-0 end-0 bottom-0 top-0">
        <div class="transition-colors bg-gray-800 px-6 py-8 shadow-2xl text-center rounded-2xl border-2 border-gray-500 m-5">
            <div class="flex flex-col gap-5">
                <div>
                    <h1 class="text-[1.2em] text-white font-extrabold">
                        Teste
                    </h1>
                </div>
                <div>
                    <h6 class="text-md text-gray-500">Count example: {{ $count }}</h6>
                </div>
                <div class="my-8 flex flex-row gap-5 items-center justify-center">
                    <x-core::ui.button wire:click="increment" class="bg-green-800">Increment</x-core::ui.button>
                    <x-core::ui.button wire:click="decrement" class="bg-red-800">Decrement</x-core::ui.button>
                </div>
                <div class="text-start text-xs md:text-[1rem] font-semibold text-white flex flex-col gap-5 mx-11/12">
                    <p><strong>CLASS:</strong> Modules/Blog/Livewire/Teste.php</p>
                    <p><strong>VIEW:</strong> Modules/Blog/Resources/views/livewire/teste.blade.php</p>
                    <p><strong>TAG:</strong> {{ $tag }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">The <code>Teste</code> livewire component is loaded from the <code>Blog</code> module.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@assets
<style lang="css">
    .example {
       color: #ef4444;
    }
</style>
@endassets

<!-- This Javascript will get executed every time this component is loaded onto the page...-->
@script
<script>
    document.addEventListener('livewire:init', () => {
        // Runs after Livewire is loaded but before it's initialized
        // on the page...
        console.log('livewire:init')
    })

    document.addEventListener('livewire:initialized', () => {
        // Runs immediately after Livewire has finished initializing
        // on the page...
        console.log('livewire:initialized')
    })
</script>
@endscript
