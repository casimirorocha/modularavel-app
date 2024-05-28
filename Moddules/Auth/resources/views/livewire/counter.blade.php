<div>
    <div class="flex bg-gray-900 items-center justify-center fixed start-0 end-0 bottom-0 top-0">
        <div
            class="transition-colors bg-gray-800 px-6 py-8 shadow-2xl text-center rounded-2xl border-2 border-gray-500">
            <div class="flex flex-col gap-5">
                <div>
                    <h1 class="text-5xl text-white font-extrabold">
                        <span class="text-gray-950">Count: </span> <strong>{{ $count }}</strong>
                    </h1>
                </div>
                <div class="my-8 flex flex-row gap-5 items-center justify-center">
                    <x-button class="font-semibold" wire:click="increment" label="Increment" color="green" icon="plus" size="md" />
                    <x-button class="font-semibold" wire:click="decrement" label="Decrement" color="red" icon="minus" size="md"/>
                </div>
                <div class="text-start text-lg font-semibold text-white flex flex-col gap-5">
                    <p><strong>Module:</strong> Modules/Auth</p>
                    <p><strong>CLASS:</strong> Modules/Auth/Livewire/Counter.php</p>
                    <p><strong>VIEW:</strong> Modules/Auth/Resources/views/livewire/counter.blade.php</p>
                    <p><strong>TAG:</strong> &lt;livewire:auth::counter/&gt;</p>
                </div>
            </div>
        </div>
    </div>
</div>
