<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;
use Livewire\WithFileUploads;

class DataCreate extends Component
{
    use WithFileUploads;
    public $namakapal;
    public $flag;
    public $gpt;
    public $arrival;
    public $departure;
    public $location;
    public $activity;
    public $cargo;
    public $volume;
    public $lastport;
    public $nextport;
    public $status;
    public $image;

    public function render()
    {
        return view('livewire.data-create');
    }
    
    public function store()
    {


        $this->validate([
            'namakapal' => 'required',
            'flag' => 'required',
            'gpt' => 'required',
            'arrival' => 'required',
            'departure' => 'required',
            'location' => 'required',
            'activity' => 'required',
            'cargo' => 'required',
            'volume' => 'required',
            'lastport' => 'required',
            'nextport' => 'required',
            'status' => 'required',
            'image' => 'required'
        ]);
     Data::create([

            'namakapal' => $this->namakapal,
            'flag'      => $this->flag,
            'gpt'       => $this->gpt,
            'arrival'   => $this->arrival,
            'departure'  => $this->departure,
            'location'  =>$this->location,
            'activity'  => $this->activity,
            'cargo'     => $this->cargo,
            'volume'     => $this->volume,
            'lastport'  => $this->lastport,
            'nextport'  => $this->nextport,
            'status'    => $this->status,
            'image'    => $this->image->store('photos','public')
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->to('home');
        session()->flash('message', 'Data Berhasil Disimpan.');
}

}
