<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }} of <strong>{{ $user->name }}</strong>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    

                        <h3 class="font-semibold text-x1 text-gray-800 leading-tight">{{ __('API Credentials') }}</h3>
                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-label id="email" class="block mt-1 w-full" value="{{ $user->profile->api_username }}" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-label id="password" class="block mt-1 w-full" value="{{ $user->profile->api_password }}" />
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
