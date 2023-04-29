<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SchoolMap extends Component
{
    public $classrooms;
    public $selectedClassroom;
    public $showInfo;
    
    public function mount()
    {
        $this->selectedClassroom = null;
        // Obtener la información de los salones de la escuela de la base de datos o de otra fuente de datos
        $this->classrooms = [
            ['id' => 1, 'name' => 'Salón 1', 'x' => 12.4, 'y' => 29, 'info' => 'Información detallada del salón 1', 'width' => 50, 'height' => 50],
            ['id' => 2, 'name' => 'Salón 2', 'x' => 22.4, 'y' => 40, 'info' => 'Información detallada del salón 2', 'width' => 50, 'height' => 50],
            ['id' => 3, 'name' => 'Salón 3', 'x' => 30, 'y' => 40, 'info' => 'Información detallada del salón 3', 'width' => 50, 'height' => 50],
            // ...
        ];
    }

    public function render()
    {
        $mapImage = '/images/school-map.jpg';

        return view('livewire.school-map', ['mapImage' => $mapImage]);
    }

    public function showClassroomInfo($classroomId)
    {
        $this->selectedClassroom = collect($this->classrooms)->firstWhere('id', $classroomId);
        $this->showInfo = true;
    }

    public function hideClassroomInfo()
    {
        $this->selectedClassroom = null;
        $this->showInfo = false;
    }
}
