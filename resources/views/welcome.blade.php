<div>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
            </x-slot>
            <form method="POST" action="{{ route('masuk') }}">
                @csrf

                <div>
                    <x-jet-label for="nama" value="{{ __('Nama') }}" />
                    <x-jet-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')"
                        required autofocus />
                </div>
                <div class="flex items-center justify-end mt-4">

                    <x-jet-button class="ml-4">
                        {{ __('Vote') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>