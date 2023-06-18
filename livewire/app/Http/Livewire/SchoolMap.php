<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Building;
use App\Models\Department;
use App\Models\Formalities;
use App\Models\Staff;

class SchoolMap extends Component
{
    public $buildings;
    public $selectedBuilding;
    public $showInfo;
    public $showDescription;
    public $showNewData = false;
    public $departments;
    public $staff;
    public $formalities;


    public function mount()
    {
        $this->selectedBuilding = null;
        // Obtener la información de los salones de la escuela de la base de datos o de otra fuente de datos
        $this->buildings = Building::all();
    }

    public function render()
    {
        $mapImage = '/images/school-map.jpg';

        return view('livewire.school-map', ['mapImage' => $mapImage]);
    }

    public function showBuildingInfo($buildingId)
    {
        $this->selectedBuilding = Building::find($buildingId);
        $this->showInfo = true;
    }

    public function hideBuildingInfo()
    {
        $this->selectedBuilding = null;
        $this->showDescription = false;
        $this->showInfo = false;
    }

    public function showDescription()
    {

        ///ejemplo de role no va aqui solo lo pegue, era algo asi
        // if $User->hasRole('guest'){
        //  return true
        //}
        //return false

        $this->showDescription = true;
    }

    public function hideDescription()
    {
        $this->showDescription = false;
    }

    public function showNewData($id)
    {

        $this->showNewData = true;
        $this->departments = Department::where('id_building', $id)->get();
        $this->staff = collect(); // Crear una colección vacía para almacenar el personal
        $this->formalities = collect();
        foreach ($this->departments as $department) {
            $staff = Staff::where('id_department', $department->id)->get();
            $formalities = Formalities::where('id_department', $department->id)->get();
            $this->staff = $this->staff->concat($staff);
            $this->formalities = $this->formalities->concat($formalities);
        }
    }
    
}
