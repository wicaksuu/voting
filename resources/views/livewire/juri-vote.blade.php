<div>
    <div class="text-center text-6xl mb-5 text-bold">
        {{ $nilai }}
    </div>
    <div class="text-center text-xl mb-5">
        {{ cache('nama_juri') }}(juri)
    </div>
    <input class="slider appearance-none w-full bg-gray-300 rounded-l-full rounded-r-full py-2 px-3 text-gray-700 leading-tight focus:
                outline-none" type="range" wire:model="nilai" min="10" max="10000" wire:input="updateNilai(value)">
</div>