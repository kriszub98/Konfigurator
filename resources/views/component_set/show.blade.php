@extends('layouts.app')
@section('title', 'Konfigurator')
@section('content')
    <div class="container">
        @forelse ($chosen_components as $component)
            <div class="card mb-3">
                <a href="{{ route('components.show', $component->id) }}">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ $component->photo_path }}" style="width:200px; height:200px; object-fit:contain">
                        </div>
                        <div class="col-md-8">
                            <div class="col-12">
                                <h4 class="card-title text-dark">{{ $component->name }}</h4>
                                <p class="card-text text-dark col-12">
                                    @if ($component->is_produced == 1)
                                        <p class="text-dark">Produkowany: Tak</p>
                                    @else
                                        <p class="text-dark">Produkowany: Nie</p>
                                    @endif
                                </p>

                                {{-- Component params --}}
                                <div class="row">
                                    @forelse ($component->properties->splice(0, 6) as $property)
                                        <div class="col-2">{{ $property->name }}:</div>
                                        <div class="col-2">{{ $property->value }}</div>
                                    @empty
                                        <div>DUDEK</div>
                                    @endforelse
                                </div>
                                <h5 class="card-text text-danger">{{ $component->price }} zł</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @empty
        @endforelse

        @guest
        @else
            <h1 class="text-danger">CENA ZESTAWU: {{ $chosen_components->sum('price') }} zł</h1>
            <form action="{{ route('sets.store') }}" method="post">
                @csrf
                <div class="col mb-3">
                    <h4 class="">Nazwa zestawu:</h4>
                    <input class="form-control" name="name" type="text" placeholder="Podaj nazwę" required />
                </div>
                <div class="col">
                    <h4 class="">Udostępnić zestaw?</h4>
                    <select class="form-control" name="is_public">
                        <option value="1">Tak</option>
                        <option value="0">Nie</option>
                    </select>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary w-25 center">Zapisz</button>
                </div>
                @foreach ($chosen_components as $item)
                    <input name="chosen_components[]" value="{{ $item->id }}" style="display:none" />
                @endforeach
            </form>
        @endguest
    </div>
@endsection
