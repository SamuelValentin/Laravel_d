<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($products as $product)
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Productos") }}
                    </div>
                    <h2 href="noticias/{{ $product->slug }}" class="pt-4 mb-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        {{ $product->name }}
                    </h2>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>