<div class="max-w-4xl mx-auto w-full sm:flex itens-center justify-between p-2">
    <div class="p-2 dark:text-white">
        <div>Cadastre o produto</div>
    </div>
    <div class="max-w-4xl mx-auto w-full justify-start">
        <form wire:submit.prevent="submitForm" action="/create-category" method="POST">
            @csrf

            <!-- Success Message -->
            @if ($successmessage)
                <div class="p-2">
                    <div class="bg-green-100 border border-green-400 text-green-700 py-2 px-4 rounded relative flex items-center justify-between"
                        role="alert">
                        <div class="block sm:inline">{{ $successmessage }}</div>
                        <div>
                            <button type="button" wire:click="$set('successmessage', null)"
                                class=" inline-flex justify-center items-center rounded-md bg-green-500 text-white">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Name -->
            <div class="p-2">
                <x-input-label for="name" :value="__('Nome')" />
                <x-input id="name" type="text" name="name" wire:model.lazy="name" :value="old('name')"
                    class="w-full mx-auto" />
                @error('name') <span class="error dark:text-white">{{ $message }}</span> @enderror
            </div>

            <!-- Button -->
            <div class="p-2">
                <x-button class="bg-blue-500">
                    {{ __('Enviar') }}
                </x-button>
            </div>

        </form>
    </div>
</div>