<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Product') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Edit product details') }}</flux:subheading>
        <flux:separator variant="subtle" />
        
        <!-- Create button aligned to the right -->
        <div class="flex justify-start mt-4">
            <a href="{{ route('products.index') }}" class="cursor-pointer rounded-md px-3 py-2 text-xs font-medium text-white bg-blue-500 hover:bg-blue-600">
                Back
            </a>
        </div>
    </div>

    <div>
        <form wire:submit="submit">
            <div class="flex flex-col gap-4">
                <flux:input wire:model="name" label="Name" placeholder="product name" />
                <flux:textarea wire:model="detail" label="Detail" placeholder="product detail" />
            </div>
            <flux:button type="submit" class="mt-4 cursor-pointer" variant="primary">Submit</flux:button>
        </form>
    </div>
</div>
