<div>

    <div
        class="relative isolate overflow-hidden bg-white my-6 px-2 py-2 sm:py-4 rounded-lg border border-gray-300 shadow">
        <div class="flex justify-center">
            <select wire:model.live="selectedCategory" wire:loading.attr="disabled"
                class="mx-2 lock rounded-md border-gray-300 pl-3 pr-10 text-base focus:border-cyan-500 focus:outline-none focus:ring-cyan-500 sm:text-sm">
                <option value=0>Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ ucfirst($category->name) }} </option>
                @endforeach
            </select>

            <div class="w-full">
                <div>
                    <label for="search" class="sr-only">
                        Search</label>
                    <input type="search" name="search" id="search" wire:model.live="search"
                        class="block w-full rounded-md border-0 py-1.5 px-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6"
                        placeholder="Search Product">
                </div>
            </div>

        </div>
    </div>

    <div class="relative isolate overflow-hidden">
        <div class="">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @forelse ($products as $prod)
                    <div class="group relative border border-gray-300 rounded p-4 shadow-lg">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="{{ route('product-detail', ['product_id' => $prod]) }}">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ ucfirst($prod->name) }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $prod->description }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">Rp{{ $prod->price }}</p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

</div>
