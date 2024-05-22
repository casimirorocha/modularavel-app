<div>
    <div class="flex bg-gray-800 items-center justify-center fixed start-0 end-0 bottom-0 top-0">
        <div class="px-6 py-8 shadow-2xl text-center rounded-2xl border transition-shadow duration-500 border-gray-700 shadow-gray-900 hover:shadow-2xl hover:shadow-gray-500 bg-gray-800">
            <div class="flex flex-col justify-items-center space-y-8 ">
                <div class="text-5xl text-white font-extrabold">
                    Auth - Login
                </div>
                <div class="text-[1.5rem] text-gray-500">Count Example: <strong class="text-indigo-500">{{ $count }}</strong></div>
                <div class="flex flex-row gap-5 items-center justify-center">
                    <x-button class="font-semibold" wire:click="increment" label="Increment" color="green" icon="plus" size="md" />
                    <x-button class="font-semibold" wire:click="decrement" label="Decrement" color="red" icon="minus" size="md"/>
                </div>
                <div class="text-start text-[1rem] font-semibold text-white flex flex-col gap-3">
                    <p><strong>CLASS:</strong> Modules/Auth/Livewire/Login.php</p>
                    <p><strong>VIEW:</strong> Modules/Auth/Resources/views/livewire/login.blade.php</p>
                    <p><strong>TAG:</strong> {{ $tag }}</p>
                </div>
                <div class="text-lg text-gray-500">The <code>Login</code> livewire component is loaded from the <code>Auth</code> module.</div>
            </div>
        </div>
    </div>
</div>

@assets
<!--
    Add here your scripts and styles coming from a CDN only for this specific page,
    or create your custom style in CSS for example:
-->

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

<style lang="css">
    h3 {
        color: #ef4444;
    }
</style>
@endassets

{{-- Put your custom scripts, or cdn scripts src here for this view ONLY --}}
@script
<script type="text/javascript">
    const message = (msg) => {
        console.log(msg)
    }

    message('Hi')
</script>
@endscript
