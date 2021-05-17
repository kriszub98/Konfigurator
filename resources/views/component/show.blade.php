@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col mt-2 col-md-6 col-12 d-flex justify-content-center">
                <div class="img">
                    {{ $component->photo_path }}
                </div>
            </div>
            
            <div class="col mt-5 ms-5">
                <h2 class="d-flex justify-content-center mt-5">{{ $component->name }}</h2>
                <div class="col">
                <div class="d-flex justify-content-left mt-2 ms-3">
                    @if ($component->is_produced == 1)
                        <p class="">Produkowany: Tak</p>
                    @else
                        <p class="">Produkowany: Nie</p>
                    @endif
                </div>
                <div class="col">
                    @forelse ($component->properties as $property)
                        <p>{{$property->name}}: {{$property->value}}</p>
                    @empty
                        <p>Brak parametrów</p>
                    @endforelse
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <h3 class="text-danger">{{ $component->price }}zł</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
