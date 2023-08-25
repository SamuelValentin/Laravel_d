<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-4">
                <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                    Id
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                    Nome
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                    Editar
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border-neutral-200">
                    Excluir
                </div>
                @foreach ($categories as $category)
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $category->id }}
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $category->name }}
                    </div>
                    <div class="m-5">
                        <a href="/category-edit/{{ $category->id }}/edit">
                            <button class="flex p-2.5 bg-blue-500 rounded-xl hover:rounded-3xl hover:bg-blue-700 transition-all duration-300 text-white dark:bg-blue-900 dark:hover:bg-blue-700 dar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="m-5">
                        <a href="/category/{{ $category->id }}/remove">
                            <button type="button" wire:click="removeCategory({{$category->id}})" class="flex p-2.5 bg-blue-500 rounded-xl hover:rounded-3xl hover:bg-blue-700 transition-all duration-300 text-white dark:bg-blue-900 dark:hover:bg-blue-700 dar">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="inline-flex"> 
                <div class="inline-flex p-3 gap-1">
                    {{ $categories->links() }}
                </div>
                <div class="p-3 justify-items-end">
                    <div class="p-3 justify-items-end">
                        <a href={{ route('category-create') }}>
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