<div>
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list"
                    class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="{{ route('dashboard') }}" class="mr-2 text-sm font-medium text-gray-900">Back
                            </a>
                        </div>
                    </li>
            </nav>
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg"
                        alt="Two each of gray, white, and black shirts laying flat."
                        class="h-full w-full object-cover object-center">
                </div>
                <div class="col-span-2">
                    <div>
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}
                        </h1>
                        <h3 class="sr-only">Description</h3>
                        <div class="space-y-6">
                            <p class="text-base text-gray-900">{{ $product->description }}</p>
                        </div>
                    </div>
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl tracking-tight text-gray-900">Rp{{ $product->price }}</p>
                </div>
                <button type="submit"
                    class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-cyan-600 px-8 py-3 text-base font-medium text-white hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">Add
                    to bag</button>
            </div>
            <div
                class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
            </div>
        </div>
    </div>
</div>
