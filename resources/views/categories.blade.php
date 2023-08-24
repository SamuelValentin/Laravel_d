<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
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
                <div class="inline-flex p-3 gap-1">
                    <button class="bg-gray-300 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-l">
                    Prev
                    </button>
                    <button class="bg-gray-300 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-r">
                    Next
                    </button>
                </div>
                <div class="p-3 justify-items-end">
                    <div class="p-3 justify-items-end">
                        <a href={{ route('category_create') }}>
                            <button class="bg-transparent hover:bg-blue-500 text-blue-700 dark:text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Adicionar 
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>