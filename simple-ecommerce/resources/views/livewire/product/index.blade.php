<div>
    {{-- <div class="relative isolate overflow-hidden bg-gray-900 my-2 px-2 py-2 sm:py-4 rounded-lg">
        <div class="flex">
            <div class="py-2 mx-2">
                <input type="text" name="search" id="search" wire:model="search"
                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Search">
            </div>
            <select wire:model="selectedCategory" wire:loading.attr="disabled"
                class="mx-2 lock rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                <option value="semua">Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ ucfirst($category->name) }} </option>
                @endforeach
            </select>
        </div>
    </div> --}}

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
                                    <a href="#">
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
