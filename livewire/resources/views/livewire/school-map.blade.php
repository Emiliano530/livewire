<div class="w-full h-full relative">
    <img src="{{ $mapImage }}" alt="Mapa de la escuela" class="w-full h-full object-contain">
    @foreach ($classrooms as $classroom)
        <div class="absolute bg-red-500 cursor-pointer"
             style="left: {{ $classroom['x'] }}%; top: {{ $classroom['y'] }}%; width: {{ $classroom['width'] }}px; height: {{ $classroom['height'] }}px;"
             wire:mouseover="showClassroomInfo('{{ $classroom['id'] }}')"
             wire:mouseout="hideClassroomInfo()"
        ></div>
    @endforeach

    @if ($selectedClassroom)
        <div class="absolute" style="left: {{ $selectedClassroom['x']}}%; top: {{ $selectedClassroom['y']}}%;"
        wire:mouseover="showClassroomInfo('{{ $selectedClassroom['id'] }}', true)"
             wire:mouseout="showClassroomInfo(null, false)">
            <div class="bg-transparent pt-5">
                <div class="w-80 rounded overflow-hidden shadow-lg">
                    <div class="flex justify-center">
                      <img class="w-full" src="https://via.placeholder.com/350x150" alt="Imagen 1">
                    </div>
                    <div class="px-6 py-2 bg-white">
                      <div class="font-bold text-xl mb-2">{{ $selectedClassroom['info'] }}</div>
                    </div>
                      <div class="flex justify-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full flex items-center justify-between">
                            <span>Botón 1</span>
                            <svg class="icon w-4 h-4 fill-current" viewBox="0 0 20 20">
                              <path d="M6.3 5.7l5 5-5 5c-.4.4-.4 1 0 1.4.2.2.5.3.7.3s.5-.1.7-.3l6-6c.4-.4.4-1 0-1.4l-6-6c-.2-.2-.5-.3-.7-.3s-.5.1-.7.3c-.4.4-.4 1 0 1.4z"></path>
                            </svg>
                          </button>
                  </div>
                      <div class="flex justify-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full flex items-center justify-between">
                      <span>Botón 2</span>
                      <svg class="icon w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M6.3 5.7l5 5-5 5c-.4.4-.4 1 0 1.4.2.2.5.3.7.3s.5-.1.7-.3l6-6c.4-.4.4-1 0-1.4l-6-6c-.2-.2-.5-.3-.7-.3s-.5.1-.7.3c-.4.4-.4 1 0 1.4z"></path>
                      </svg>
                    </button>
                  </div>
                  </div>
            </div>
        </div>
    @endif
</div>
