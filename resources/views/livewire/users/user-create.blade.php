<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Create a new user') }}</flux:subheading>
        <flux:separator variant="subtle" />
        
        <!-- Create button aligned to the right -->
        <div class="flex justify-start mt-4">
            <a href="{{ route('users.index') }}" class="cursor-pointer rounded-md px-3 py-2 text-xs font-medium text-white bg-blue-500 hover:bg-blue-600">
                Back
            </a>
        </div>
    </div>

    <div>
        <form wire:submit="submit">
            <div class="flex flex-col gap-4">
                <flux:input wire:model="name" label="Name" placeholder="your name" />
                <flux:input wire:model="email" label="Email" type="email" placeholder="your email" />
                <flux:input wire:model="password" label="Password" type="password" placeholder="**********" />
                <flux:input wire:model="confirm_password" label="Confirm Password" type="password" placeholder="**********" />
            </div>
            <flux:button type="submit" class="mt-4 cursor-pointer" variant="primary">Submit</flux:button>
        </form>
    </div>
</div>
