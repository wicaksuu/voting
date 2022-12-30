<div class="p-5">
    <form wire:submit.prevent="addSinger">
        @csrf
        <div>
            <x-jet-label for="nama" value="{{ __('Nama Penyanyi') }}" />
            <x-jet-input id="nama" wire:model="nama" class="block mt-1 w-full" type="text"  required autofocus />
        </div>
        <div class="mt-3">
            <x-jet-label for="kategori" value="{{ __('Kategori Lomba') }}" />
            <x-jet-input id="kategori" wire:model="kategori" class="block mt-1 w-full" type="text"  required autofocus />
        </div>
        <div class="flex items-center justify-end mt-4">
            <div class="pt-3">
                <button
                    class="flex px-6 py-3 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 hover:text-white focus:outline-none focus:shadow-outline focus:border-indigo-300"
                    type="submit">
                    <span class="self-center float-left ml-3 text-base font-medium">Tambah Penyanyi</span>
                </button>
            </div>
        </div>
    </form>
</div>