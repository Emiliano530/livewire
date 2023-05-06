@if (!$showNewData)
    <div class="w-full h-full relative">
        <img src="{{ $mapImage }}" alt="Mapa de la escuela" class="w-full h-full object-contain">
        @foreach ($buildings as $building)
            <div class="absolute bg-transparent cursor-pointer"
                style="left: {{ $building->left }}%; top: {{ $building->top }}%; width: {{ $building->width }}%; height: {{ $building->height }}%;"
                wire:click="showBuildingInfo('{{ $building->id }}')" wire:mouseout="hideBuildingInfo()"></div>
        @endforeach

        @if ($selectedBuilding)
            <div class="absolute h-64"
                style="left: {{ $selectedBuilding->left - 11.5 + 23 > 100 ? 100 - 28 : ($selectedBuilding->left - 11.5 < 0 ? abs($selectedBuilding->left - 11.5) + 1 : $selectedBuilding->left - 11.5) }}%; 
      top: {{ $selectedBuilding->top + 64 > 100 ? abs($selectedBuilding->top) - (abs($selectedBuilding->top + 64 - 99) + 3) : $selectedBuilding->top }}%; "
                wire:mouseover="showBuildingInfo('{{ $selectedBuilding->id }}', true)"
                wire:mouseout="showBuildingInfo(null, false)"">
                <div class="w-80 rounded overflow-hidden shadow-lg">
                    <div class="flex justify-center h-44 w-full items-center overflow-hidden bg-gray-300">
                        <img class="object-bottom" src="{{ $selectedBuilding->image }}">
                    </div>
                    @if (!$showDescription)
                        <div class="px-6 py-2 bg-white">
                            <div class="font-bold text-xl mb-2">Edificio {{ $selectedBuilding->letter }}</div>
                            <div class="font-bold text-xl mb-2">{{ $selectedBuilding->name }}</div>
                        </div>
                        <div class="flex justify-end">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full flex items-center justify-between"
                                wire:click="showDescription">
                                <span>Ver descripción</span>
                                <svg class="icon w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M6.3 5.7l5 5-5 5c-.4.4-.4 1 0 1.4.2.2.5.3.7.3s.5-.1.7-.3l6-6c.4-.4.4-1 0-1.4l-6-6c-.2-.2-.5-.3-.7-.3s-.5.1-.7.3c-.4.4-.4 1 0 1.4z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    @else
                        <div class="px-6 py-2 bg-white">
                            <div class="font-bold text-xl mb-2">Edificio {{ $selectedBuilding->letter }}</div>
                            <div class="h-24 font-bold text-lg mb-2">{{ $selectedBuilding->description }}</div>
                        </div>
                        <div class="flex justify-end">

                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full flex items-center justify-between"
                                wire:click="showNewData">
                                <span>Ver más</span>
                                <svg class="icon w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M6.3 5.7l5 5-5 5c-.4.4-.4 1 0 1.4.2.2.5.3.7.3s.5-.1.7-.3l6-6c.4-.4.4-1 0-1.4l-6-6c-.2-.2-.5-.3-.7-.3s-.5.1-.7.3c-.4.4-.4 1 0 1.4z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>
@else
    <h1>fff</h1>
@endif
