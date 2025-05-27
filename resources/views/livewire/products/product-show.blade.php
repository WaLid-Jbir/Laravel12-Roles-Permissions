<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Product') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show product informations') }}</flux:subheading>
        <flux:separator variant="subtle" />
        
        <!-- Create button aligned to the right -->
        <div class="flex justify-start mt-4">
            <a href="{{ route('users.index') }}" class="cursor-pointer rounded-md px-3 py-2 text-xs font-medium text-white bg-blue-500 hover:bg-blue-600">
                Back
            </a>
        </div>
    </div>

    <div>
        <p class="mt-2"><strong>Name: </strong>{{ $product->name }}</p>
        <p class="mt-2"><strong>Email: </strong>{{ $product->detail }}</p>
    </div>
</div>
