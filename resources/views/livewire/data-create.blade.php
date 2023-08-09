<div class="card">
    <div class="card-header">
        <h2 class="text-center">Tambah Data</h2>
    </div>
        <div class="card-body">
            @if ( session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
           
            <form wire:submit.prevent="store">
            <div class="row">
                <div class="col">
                    <label for="namakapal" class="form-label">Nama kapal</label>
                    <input type="text" class="form-control  @error('namakapal') is-invalid  @enderror" wire:model="namakapal">
                    @error('namakapal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="flag" class="form-label">flag</label>
                    <input type="text" class="form-control  @error('flag') is-invalid  @enderror" wire:model="flag">
                    @error('flag')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="gpt" class="form-label">Gpt</label>
                    <input type="number" step="any" class="form-control @error('gpt') is-invalid  @enderror" wire:model="gpt">
                    @error('gpt')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="arrival" class="form-label">Arrival</label>
                    <input type="date" class="form-control  @error('arrival') is-invalid  @enderror" wire:model="arrival">
                    @error('arrival')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="departure" class="form-label">Depature</label>
                    <input type="date" class="form-control @error('departure') is-invalid  @enderror" wire:model="departure">
                    @error('departure')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control  @error('location') is-invalid  @enderror" wire:model="location">
                    @error('location')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <br>
        <div class="row">
            <div class="col">
                <label for="activity" class="form-label">Activity</label>
                <input type="text" class="form-control  @error('activity') is-invalid  @enderror" wire:model="activity">
                @error('activity')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="cargo" class="form-label">cargo</label>
                <input type="text" class="form-control @error('cargo') is-invalid  @enderror" wire:model="cargo">
                @error('cargo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col ">
                <label for="volume" class="form-label">Volume</label>
                <input type="number" step="any" class="form-control @error('volume') is-invalid  @enderror" wire:model="volume">
                @error('volume')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="lastport" class="form-label">lastport</label>
                <input type="text" class="form-control  @error('lastport') is-invalid  @enderror" wire:model="lastport">
                @error('lastport')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="nextport" class="form-label">nextport</label>
                <input type="text" class="form-control @error('nextport') is-invalid  @enderror" wire:model="nextport">
                @error('nextport')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
            <br>
            <div class="row">
            <div class="col">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" @error('status') is-invalid  @enderror" wire:model="status">
                @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" @error('image') is-invalid  @enderror" id="image" wire:model="image">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>

      
           
            <br>
            <div class="row mb-0">
                <div class="col-md-4 offset-md-4 mb-2">
            <button type="submit" class="form-control btn btn-outline-primary "> Submit</button>
        </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-4 offset-md-4">
            <a href="/home" class="form-control btn btn-outline-primary ">Back</a>
        </div>
            </div>
     </div>
    </form>
    </div>
</div>
</div>
</div>
</div>