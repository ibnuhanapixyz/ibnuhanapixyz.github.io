@extends('layouts.app')

@push('styles')
@livewireStyles
@endpush

@push('scripts')
@livewireScripts
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div>
                    @livewire('data-table')
                </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection

