
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
            @livewire('data-create')
        </div>
    </div>

@endsection