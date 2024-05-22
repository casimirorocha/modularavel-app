<div>
    <div class="flex bg-gray-900 items-center justify-center fixed start-0 end-0 bottom-0 top-0">
        <div
            class="transition-colors bg-gray-800 px-6 py-8 shadow-2xl text-center rounded-2xl border-2 border-gray-500">
            <div class="flex flex-col gap-5">
                <div>
                    <h1 class="text-5xl text-white font-extrabold">
                        Auth - Login
                    </h1>
                </div>
                <div>
                    <h6 class="text-gray-500">Count example: {{ $count }}</h6>
                </div>
                <div class="my-3 flex flex-row gap-5 items-center justify-center">
                    <x-button class="font-semibold" wire:click="increment" label="Increment" color="green" icon="plus" size="md" />
                    <x-button class="font-semibold" wire:click="decrement" label="Decrement" color="red" icon="minus" size="md"/>
                </div>
                <div class="text-start text-[1rem] font-semibold text-white flex flex-col gap-3">
                    <p><strong>CLASS:</strong> Modules/Auth/Livewire/Login.php</p>
                    <p><strong>VIEW:</strong> Modules/Auth/Resources/views/livewire/login.blade.php</p>
                    <p><strong>TAG:</strong> {{ $tag }}</p>
                </div>
                <div>
                    <p class="text-lg text-gray-500">The <code>Login</code> livewire component is loaded from the <code>Auth</code> module.</p>
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
