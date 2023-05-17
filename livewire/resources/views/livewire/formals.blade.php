<div class="flex flex-wrap gap-10 justify-center">
    @foreach ($groupedForms as $forms)
        <div class="w-2/5">
            <div class="bg-red-500 w-full p-5 my-5">
                {{ $forms->first()->departments->name }}
            </div>
            <div class="card">
                <div class="flex flex-wrap gap-4 justify-center rounded-xl bg-blue-500 py-6 p-4">
                    @foreach ($forms as $form)
                        <div class="max-w-sm w-44 break-words p-4 bg-gray-100 cursor-pointer"
                            wire:click="showModal('{{ $form->id }}')">
                            {{ $form->name }}
                        </div>
                    @endforeach
                </div>
                @foreach ($forms as $form)
                    @if ($selectedForm && $form->id === $selectedForm->id)
                        <div
                            class="fixed inset-0 flex items-center justify-center z-50 {{ $isModalOpen ? 'block' : 'hidden' }}">
                            <div class="modal-content bg-blue-800 bg-opacity-100 rounded-xl p-4">
                                <button wire:click="closeModal"
                                    class="absolute top-5 right-5 mt-4 mr-4 button-corner"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-14 h-14 stroke-gray-300" >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <p class="p-2 break-words text-white text-center">{{ $selectedForm->description }}</p>
                            </div>
                        </div>
                        @if ($isModalOpen)
                            <div class="fondo-oscuro fixed inset-0 bg-black opacity-80 z-40">
                            </div>
                            <style>
                                body {
                                    overflow: hidden;
                                }
                            </style>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
</div>
