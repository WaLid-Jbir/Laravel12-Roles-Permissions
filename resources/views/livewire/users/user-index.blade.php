<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Users') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage all your users') }}</flux:subheading>
        <flux:separator variant="subtle" />
        
        <!-- Create button aligned to the right -->
        <div class="flex justify-start mt-4">
            <button class="cursor-pointer rounded-md px-3 py-2 text-xs font-medium text-white bg-blue-500 hover:bg-blue-600">
                Create User
            </button>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="w-1/12 px-6 py-3">ID</th>
                    <th scope="col" class="w-3/12 px-6 py-3">Name</th>
                    <th scope="col" class="w-4/12 px-6 py-3">Email</th>
                    <th scope="col" class="w-4/12 px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700">
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">1</td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">John Doe</td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">john@example.com</td>
                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <button class="cursor-pointer rounded-md px-3 py-2 text-xs font-medium text-white bg-green-500 hover:bg-green-600 mr-2">
                            Edit
                        </button>
                        <button class="cursor-pointer rounded-md px-3 py-2 text-xs font-medium text-white bg-red-500 hover:bg-red-600">
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
