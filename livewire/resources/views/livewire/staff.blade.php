<div class="flex">
    <div
        class="flex flex-wrap gap-4 justify-center {{ $selectedStaff ? 'w-2/3 rounded-l-xl m-16 mr-0' : 'rounded-xl m-16' }} bg-blue-500 py-6 p-4">
        @foreach ($staff as $item)
            <h1 class="max-w-sm w-44 break-words p-4 bg-gray-100 cursor-pointer"
                wire:click="showFormInfo('{{ $item->id }}')">
                {{ $item->name }}</h1> <br>
        @endforeach
    </div>
    @if ($selectedStaff)
        <div class="w-1/3 bg-blue-800 relative rounded-r-xl m-16 ml-0">
            <div class="h-full flex flex-col justify-center">
                <p class="p-2 break-words text-white text-center">{{ $selectedStaff->position }}</p>
                <button
                    class="p-2 bg-red-600 rounded-tr-xl hover:bg-red-500 text-white border-none absolute top-0 right-0"
                    wire:click="showFormInfo(null)">Cerrar</button>
            </div>
        </div>
    @endif
</div>
