@php
$i=0;
@endphp
@foreach ($peserta as $pesetas )
@php
$i++;
@endphp
<tr class="bg-white border-b">
    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $i }}
    </td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        {{ $pesetas->nama }}
    </td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        {{ $pesetas->kategori }}
    </td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        {{ $pesetas->status }}
    </td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        {{ $pesetas->status }}
    </td>
</tr class="bg-white border-b">
@endforeach