<?php

namespace App\Http\Livewire;

use App\Models\Formalities;
use Livewire\Component;

class Formals extends Component
{
    public $forms;
    public $selectedForm;
    public function mount()
    {
        $this->selectedForm = null;
        $this->forms = Formalities::all();
    }
    public function render()
    {

        return view('livewire.formals');
    }

    public function showFormInfo($formId)
    {
        $this->selectedForm = Formalities::find($formId);
    }
}
