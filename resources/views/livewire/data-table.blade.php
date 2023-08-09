
<div>
    <div class="col-md-3 mb-3">
        <input type="text" class="form-control "  wire:model="search" placeholder="Cari">
    </div>
    <div class="mb-3">
        <a href="{{ url('/create') }}" class="btn btn-primary mb-3">Add Data</a>
    </div>
   
        {{-- <button wire:click="export" class="btn btn-primary">PDF</button> --}}
   <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kapal</th>
                <th>Flag</th>
                <th>Gpt</th>
                <th>Arrival</th>
                <th>Departure</th>
                <th>Location</th>
                <th>Activity</th>
                <th>Cargo</th>
                <th>Volume</th>
                <th>Last port</th>
                <th>Next Port</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index =>$item )
            <tr>

                <td>{{ $data->firstItem() + $index }}</td>
                <td>{{ $item->namakapal }}</td>
                <td>{{ $item->flag }}</td>
                <td>{{ $item->gpt }}</td>
                <td>{{ $item->arrival }}</td>
                <td>{{ $item->departure }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->activity }}</td>
                <td>{{ $item->cargo }}</td>
                <td>{{ $item->volume }}</td>
                <td>{{ $item->lastport }}</td>
                <td>{{ $item->nextport }}</td>
                <td>{{ $item->status }}</td>
                <td><img src="{{ asset('storage') }}/{{$item->image}}" width="120px" class="img-fluid mt-3">  </td>
                <td class=""> 
                <button wire:click="delete({{ $item->id }})" class="btn btn-danger mb-1 ">Delete</button>
                <br>
                <a class="btn btn-primary" href="{{ route('update', $item->id)}}" >Update</a> 
                </div>
            </td>
                
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
</div>
</div>


