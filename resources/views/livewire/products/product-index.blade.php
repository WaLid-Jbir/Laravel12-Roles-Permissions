<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Products') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage all your products') }}</flux:subheading>
        <flux:separator variant="subtle" />

        @session('success')
            <div class="flex items-center p-2 mb-4 text-sm text-green-800 rounded-lg bg-green-500 dark:bg-gray-800 dark:text-green-400" role="alert">
                <div class="flex gap-2">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="font-medium">{{ $value }}</span>
                </div>
            </div>
        @endsession
        
        <!-- Create button aligned to the right -->
        <div class="flex justify-start mt-4">
            <a href="{{ route('products.create') }}" class="cursor-pointer rounded-md px-3 py-2 text-xs font-medium text-white bg-blue-500 hover:bg-blue-600">
                Create Product
            </a>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="w-1/12 px-6 py-3">ID</th>
                    <th scope="col" class="w-3/12 px-6 py-3">Name</th>
                    <th scope="col" class="w-4/12 px-6 py-3">Details</th>
                    <th scope="col" class="w-4/12 px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700">
                        <td class="w-1/12 px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->id }}</td>
                        <td class="w-3/12 px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->name }}</td>
                        <td class="w-4/12 px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->detail }}</td>
                        <td class="flex gap-2 w-4/12 px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('products.show', $product->id) }}" class="cursor-pointer rounded-md px-3 py-2 text-xs font-medium text-white bg-amber-500 hover:bg-amber-600 mr-2">
                                Show
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="cursor-pointer rounded-md px-3 py-2 text-xs font-medium text-white bg-green-500 hover:bg-green-600 mr-2">
                                Edit
                            </a>
                            <a wire:click="delete({{ $product->id }})" wire:confirm="Are you sure you want to delete?" class="cursor-pointer rounded-md px-3 py-2 text-xs font-medium text-white bg-red-500 hover:bg-red-600">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>