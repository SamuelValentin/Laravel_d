<x-app-layout>
    
    <section class="bg-gray-50 dark:bg-gray-800">

        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-8 lg:px-6">
            <h1
                class="max-w-2xl mb-2 text-4xl font-extrabold md:leading-none md:tracking-tight md:text-5xl xl:text-6xl lg:mt-2 dark:text-white">
                Edição de produto</h1>
        </div>

        <livewire:edit-product :product="$product" />
    </section>
    
</x-app-layout>