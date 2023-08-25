<div class="max-w-4xl mx-auto w-full sm:flex itens-center justify-between p-2">
    <div class="p-2 dark:text-white">
        <div>Cadastre o produto</div>
    </div>
    <div class="max-w-4xl mx-auto w-full justify-start">
        <form wire:submit.prevent="submitForm" action="/create-product" method="POST">
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
                {{-- <x-input-error for="name" class="mt-2" /> --}}
            </div>

            <!-- Preço -->
            <div class="p-2">
                <x-input-label for="price" :value="__('Preço')" />
                <x-input id="price" type="text" name="price" wire:model.lazy="price" :value="old('price')"
                    class="w-full mx-auto" />
                {{-- <x-input-error for="price" class="mt-2" /> --}}
            </div>

            <div class="p-2">
                <x-input-label for="categories_id" :value="__('categories_id')" />
                <select wire:model="categories_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                {{-- <x-input-error for="price" class="mt-2" /> --}}
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