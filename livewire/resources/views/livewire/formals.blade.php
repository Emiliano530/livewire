<div class="flex ">
    <div class="flex flex-wrap gap-4 justify-center {{ $selectedForm ? 'w-2/3 rounded-l-xl' : 'rounded-xl' }} bg-blue-500 py-6 pl-4">
        @foreach ($forms as $item)
            <h1 class="max-w-sm w-44 break-words p-4 bg-gray-100 cursor-pointer" wire:click="showFormInfo('{{ $item->id }}')">
                {{ $item->name }}</h1> <br>
        @endforeach
    </div>
    @if ($selectedForm)
    <div class="w-1/3 bg-blue-800 relative rounded-r-xl">
        <div class="h-full flex flex-col justify-center">
          <p class="p-2 break-words text-white text-center">{{ $selectedForm->description }}</p>
          <button class="p-2 bg-red-600 rounded-tr-xl hover:bg-red-500 text-white border-none absolute top-0 right-0" wire:click="showFormInfo(null)">Cerrar</button>
        </div>
    </div> 
    @endif
</div>

