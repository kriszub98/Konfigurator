@extends('layouts.app')

@section('custom_styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row position-absolute top-50 end-0">
        <div class="col-md-12">
            <h1 class="text-white fs-1 d-flex center me-5"> Witamy na naszej stronie </h1>
            <div class="col d-flex justify-content-center">
                <button type="submit" href="{{ route('sets.configurator') }}" class="btn text-white w-50 fs-2 mt-5" style="border: 4px solid white; border-radius: 25px;">
                    {{ __('Przejdź do konfiguratora') }}
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
