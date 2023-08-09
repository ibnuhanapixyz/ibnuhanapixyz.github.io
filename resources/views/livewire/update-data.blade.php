
@extends('layouts.app')
@push('styles')
@livewireStyles
@endpush

@push('scripts')
@livewireScripts
@endpush

@section('content')
    <div class="container">
        <div>
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Update Data</h2>
                </div>
                    <div class="card-body">
                    
                         <form wire:submit.prevent="update">
                            <input type="hidden" wire:model="data_id">
                         
                        <div class="row">
                            <div class="col">
                                <label for="namakapal" class="form-label">Nama kapal</label>
                                <input type="text" wire:model="namakapal" class="form-control  @error('namakapal') is-invalid  @enderror" >
                                @error('namakapal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="flag" class="form-label">flag</label>
                                <input type="text" wire:model="flag" class="form-control  @error('flag') is-invalid  @enderror" >
                                @error('flag')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="gpt" class="form-label">Gpt</label>
                                <input type="number"  wire:model="gpt" step="any" class="form-control @error('gpt') is-invalid @enderror" >
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
                                <input type="date" wire:model="arrival" class="form-control  @error('arrival') is-invalid  @enderror" >
                                @error('arrival')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="departure" class="form-label">Depature</label>
                                <input type="date" wire:model="departure" class="form-control @error('departure') is-invalid  @enderror" >
                                @error('departure')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" wire:model="location" class="form-control  @error('location') is-invalid  @enderror">
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
                            <input type="text" wire:model="activity" class="form-control  @error('activity') is-invalid  @enderror" >
                            @error('activity')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="cargo" class="form-label">cargo</label>
                            <input type="text" wire:model="cargo" class="form-control @error('cargo') is-invalid  @enderror" >
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
                            <input type="number" wire:model="volume" step="any" class="form-control @error('volume') is-invalid  @enderror" >
                            @error('volume')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="lastport" class="form-label">lastport</label>
                            <input type="text"  wire:model="lastport" class="form-control  @error('lastport') is-invalid  @enderror">
                            @error('lastport')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="nextport" class="form-label">nextport</label>
                            <input type="text" wire:model="nextport" class="form-control @error('nextport') is-invalid  @enderror" >
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
                            <input type="text" wire:model="status" class="form-control" @error('status') is-invalid  @enderror" >
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
                        <button type="submit" value="save" class="form-control btn btn-outline-primary">Update</button>
                            </div>
                        </div>
                        <div class="row mb-0">
                        <div class="col-md-4 offset-md-4 mb-2">
                        <a href="/home"   class="form-control btn btn-outline-primary">Back</a>
                    </div>
                        </div>
                 </div>
                </form>
                </div>
            </div>
            </div>
            </div>
            </div>
            

        </div>
    </div>

@endsection