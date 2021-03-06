@extends('layouts.app')
@section('title', 'Konfigurator')
    <link href="{{ asset('css/configurator.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <h5>Zastosowane parametry:</h5>
        <div>
            @forelse ($requirements as $requirement)
                {{ $requirement['name'] }} {{ $requirement['value'] }}
            @empty

            @endforelse
        </div>
        <h1 class="text-center">{{ $type->name }}</h1>
        <div class="row">
            @forelse ($components as $component)
                <div class="col-md-3 mt-5">
                    <a href="{{ route('components.show', $component->id) }}">
                        <div class="card rounded" style="box-shadow: 1px 3px 3px grey; ">
                            <div class="card-image">
                                <object><a
                                        href="{{ route('sets.addComponent', ['type' => $type, 'component' => $component]) }}"><span
                                            class="card-notify-trash fa fa-plus"></span></a></object>
                                <img class="img-fluid" src="{{ $component->photo_path }}" />
                            </div>
                            <div class="card-image-overlay ms-2 mt-auto mb-auto">
                                <h3 class="bold text-dark">{{ $component->name }}</h3>
                                <h5 class="text-danger">{{ $component->price }} zł</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <h1 class="text-danger text-center">Brak komponentów spełniających wymagania</h1>
                <div class="row d-flex justify-content-center mt-4">
                    <a class="btn btn-primary w-25" href="{{ route('configurator.pass', ['type' => $type]) }}">Pomiń</a>
                </div>
            @endforelse
            @if ($components)
            <div class="row d-flex justify-content-center mt-4">
                    <a class="btn btn-primary w-25" href="{{ route('configurator.pass', ['type' => $type]) }}">Pomiń</a>
                </div>
            @endif
        </div>
    </div>
@endsection
