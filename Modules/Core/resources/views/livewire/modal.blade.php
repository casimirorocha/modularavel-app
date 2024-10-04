<div>
    <!-- Button trigger modal -->
    <button
        type="button"
        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
        data-twe-toggle="modal"
        data-twe-target="#exampleModalFirst"
        data-twe-ripple-init
        data-twe-ripple-color="light"
		>
        Open first modal
    </button>

    <!-- First Modal -->
    <div
        data-twe-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalFirst"
        tabindex="-1"
        aria-labelledby="exampleModalFirstLabel"
        aria-hidden="true">
        <div
            data-twe-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                    <h5
                        class="text-xl font-medium leading-normal text-surface dark:text-white"
                        id="exampleModalFirstLabel">
                        Modal 1
                    </h5>
                    <button
                        type="button"
                        class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                        data-twe-modal-dismiss
                        aria-label="Close">
          <span class="[&>svg]:h-6 [&>svg]:w-6">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor">
              <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 18L18 6M6 6l12 12" />
            </svg>
          </span>
                    </button>
                </div>
                <div class="relative flex-auto p-4" data-twe-modal-body-ref>
                    Show a second modal and hide this one with the button below.
                </div>
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
        <span data-twe-modal-dismiss>
          <button
              type="button"
              class="ms-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
              data-twe-ripple-init
              data-twe-ripple-color="light"
              data-twe-toggle="modal"
              data-twe-target="#exampleModalSecond">
            Open second modal
          </button>
        </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Modal -->
    <div
        data-twe-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalSecond"
        tabindex="-1"
        aria-labelledby="exampleModalSecondLabel"
        aria-hidden="true">
        <div
            data-twe-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                    <h5
                        class="text-xl font-medium leading-normal text-surface dark:text-white"
                        id="exampleModalSecondLabel">
                        Modal 2
                    </h5>
                    <button
                        type="button"
                        class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                        data-twe-modal-dismiss
                        aria-label="Close">
          <span class="[&>svg]:h-6 [&>svg]:w-6">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor">
              <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 18L18 6M6 6l12 12" />
            </svg>
          </span>
                    </button>
                </div>
                <div class="relative flex-auto p-4" data-twe-modal-body-ref>
                    Hide this modal and show the first with the button below.
                </div>
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
        <span data-twe-modal-dismiss>
          <button
              type="button"
              class="ms-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
              data-twe-ripple-init
              data-twe-ripple-color="light"
              data-twe-toggle="modal"
              data-twe-target="#exampleModalFirst">
            Open first modal
          </button>
        </span>
                </div>
            </div>
        </div>
    </div>
</div>

@assets
<style lang="css">
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
