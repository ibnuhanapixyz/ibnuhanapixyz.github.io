<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
    public $search = '';
    use WithPagination;
    protected $paginationTheme ='bootstrap';
    public function render()
    {
        return view('livewire.data-table',[
            'data' => Data::where('namakapal','like','%'.$this->search.'%')->paginate(5)
        ]);
    
    }
    public function updatingSearch() 
    {
        $this->resetPage();
    }
    public function delete($id)
    {
        Data::find($id)->delete();
        session()->flash('message', 'Data Deleted Successfully.');
    }
    public function export()
    {
        return Data::disk('exports')->download('export.csv');
        return response()->streamDownload(function () {
            echo 'CSV Contents...';
        }, 'export.csv');
    }
    public function can_download_export()
{
    Data::test(ExportButton::class)
        ->call('download')
        ->assertFileDownloaded('export')
    ;
 
}
    
}
