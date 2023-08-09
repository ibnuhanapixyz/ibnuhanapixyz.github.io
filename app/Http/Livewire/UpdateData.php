<?php

namespace App\Http\Livewire;

use App\Models\Data;
use App\Models\item;
use Livewire\Component;

class UpdateData extends Component
{
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
    public $data_id;
    public function mount($id)
    {
        $item = Data::find($id);

        if($item) {
            $this-> data_id = $item->id;
            $this->namakapal = $item->namakapal;
            $this->flag = $item->flag;
            $this->arrival = $item->arrival;
            $this->departure = $item->departure;
            $this->location = $item->location;
            $this->activity =$item->activity;
            $this->cargo = $item->cargo;
            $this->volume =$item->volume;
            $this->lastport =$item->lastport;
            $this->nextport =$item->nextport;
            $this->status =$item->status;
        }
       
    }

    public function update() {
        
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
            'status' => 'required'
        ]);

        if($this->data_id) {
            $item = Data::find($this->item_id);
        }
       if($item) {
        $item->update([
           'namakapal' => $this->namakapal,
           'flag' =>$this->flag,
           'arrival' => $this->arrival,
           'departure' => $this->departure,
           'location' => $this->location,
           'activity' => $this->activity,
           'cargo' => $this->cargo,
           'volume' => $this->volume,
           'lastport' => $this->lastport,
           'nextport' => $this->nextport,
           'status' => $this->status,

        ]);
       }
        
          session()->flash('message', 'item Berhasil Diupdate.');

        //redirect
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.update-data');
    }
}
