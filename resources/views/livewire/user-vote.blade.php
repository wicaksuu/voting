<div>
    <div class="text-center text-6xl mb-5 text-bold">
        {{ $nilai }}
    </div>
    <div class="text-center text-xl mb-5">
        {{ cache('nama') }}
    </div>
    <form wire:submit.prevent="simpanVote">
        @csrf
        <input class="slider appearance-none w-full bg-gray-300 rounded-l-full rounded-r-full py-2 px-3 text-gray-700 leading-tight focus:
                outline-none" type="range" wire:model="nilai" min="10" max="1000" wire:input="updateNilai(value)">

        <div class="flex items-center justify-center mt-4">
            <div class="pt-3">
                <button
                    class="flex px-6 py-3 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 hover:text-white focus:outline-none focus:shadow-outline focus:border-indigo-300"
                    type="submit">
                    <span class="self-center float-left ml-3 text-base font-medium">Simpan Vote</span>
                </button>
            </div>
        </div>
    </form>
</div>