<div>
    <header>
        <h2 class="text-lg font-medium text-gray-900">update Profile Information ===>  livewire</h2>
        <p class="mt-1 text-sm text-gray-600">Update your account's profile information and email address.</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form wire:submit.prevent="updateprofile" class="mt-6 space-y-6">
        @csrf
        {{--name--}}
        <div>
            <x-input-label for="name" :value="__('Name')"/>
            <x-text-input wire:model="name" id="name" name="name" type="text" class="mt-1 block w-full"
                          required autofocus autocomplete="name"/>
            <x-input-error class="mt-2" :messages="$errors->get('name')"/>
        </div>
        {{--email--}}
        <div>
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input wire:model="email" id="email" name="email" type="email" class="mt-1 block w-full"
                          required autocomplete="email"/>
            <x-input-error class="mt-2" :messages="$errors->get('email')"/>
        </div>
        {{--save--}}
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
        {{--        alert--}}
        @if($success)
            <div class="alert alert-success">Data saved successfully</div>
        @endif
    </form>
</div>
