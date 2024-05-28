<div>
    <div class="flex mw-100 bg-gray-900 items-center justify-center fixed start-0 end-0 bottom-0 top-0">
        <div class="transition-colors bg-gray-800 px-6 py-8 shadow-2xl text-center rounded-2xl border-2 border-gray-500 m-5">
            <div class="flex flex-col gap-5">
                <div>
                    <h1 class="text-5xl text-white font-extrabold">
                        Auth - Privacy2
                    </h1>
                </div>
                <div>
                    <h6 class="text-gray-500">Count example: {{ $count }}</h6>
                </div>
                <div class="my-4 flex flex-col md:flex-row gap-5 items-center justify-center">
                    <x-button class="font-semibold" wire:click="increment" label="Increment" color="positive" icon="plus" size="lg" />
                    <x-button class="font-semibold" wire:click="decrement" label="Decrement" color="negative" icon="minus" size="lg"/>
                </div>
                <div class="text-start text-xs md:text-[1rem] font-semibold text-white flex flex-col gap-5 mx-11/12">
                    <p><strong>CLASS:</strong> Modules/Auth/Livewire/Privacy2.php</p>
                    <p><strong>VIEW:</strong> Modules/Auth/Resources/views/livewire/privacy2.blade.php</p>
                    <p><strong>TAG:</strong> {{ $tag }}</p>
                </div>
                <div>
                    <p class="text-lg text-gray-500">The <code>Privacy2</code> livewire component is loaded from the <code>Auth</code> module.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@assets
<style lang="css">
    h3 {
       color: #ef4444;
    }
</style>
@endassets
