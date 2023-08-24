<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Listagem de produtos home --}}
    <div class="py-12">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-5 pl-10">
            Produtos Cadastrados
        </h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg md:grid md:grid-cols-4">
                    <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                        Nome
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                        Preço
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                        Categorias
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                        Editar
                    </div>
                @foreach ($products as $product)
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $product->name }}
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $product->price }}
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $product->categories_id }}
                    </div>
                    <div class="m-5" href={{ route('products') }}>
                        <button class="flex p-2.5 bg-blue-500 rounded-xl hover:rounded-3xl hover:bg-blue-700 transition-all duration-300 text-white dark:bg-blue-900 dark:hover:bg-blue-700 dar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                    </div>
                @endforeach
            </div>
            <div class="inline-flex"> 
                <div class="p-3 justify-items-end">
                    <div class="p-3 justify-items-end">
                        <a href={{ route('products') }}>
                            <button class="bg-transparent hover:bg-blue-500 text-blue-700 dark:text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Ver Mais 
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Listagem de categorias --}}
    <div class="py-12">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-5 pl-10">
            Categorias
        </h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-3">
                <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                    Id
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                    Nome
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                    Editar
                </div>
                @foreach ($categories as $category)
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $category->id }}
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $category->name }}
                    </div>
                    <div class="m-5" href={{ route('products') }}>
                        <button class="flex p-2.5 bg-blue-500 rounded-xl hover:rounded-3xl hover:bg-blue-700 transition-all duration-300 text-white dark:bg-blue-900 dark:hover:bg-blue-700 dar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                    </div>
                @endforeach
            </div>
            <div class="inline-flex"> 
                <div class="p-3 justify-items-end">
                    <div class="p-3 justify-items-end">
                        <a href={{ route('categories') }}>
                            <button class="bg-transparent hover:bg-blue-500 text-blue-700 dark:text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Ver Mais
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
