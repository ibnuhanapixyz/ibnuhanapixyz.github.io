<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Data;

class DataIndex extends Component
{
    public $data;
    public function render()
    {
        $this->data = Data::latest()->get();
        return view('livewire.data-index');
        
    }
}
