@extends('layouts.app')
@section('title', 'Konfigurator')
@section('content')
    <div class="container">
        @forelse ($chosen_components as $component)
            <div class="card mb-3" >
                <a href="{{ route('components.show', $component->id) }}">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ $component->photo_path }}" style="width:200px; height:200px; object-fit:contain">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title text-dark">{{ $component->name }}</h4>
                                <p class="card-text text-dark">
                                    @if ($component->is_produced == 1)
                                        <p class="text-dark">Produkowany: Tak</p>
                                    @else
                                        <p class="text-dark">Produkowany: Nie</p>
                                    @endif
                                </p>
                                <h5 class="card-text text-danger">{{ $component->price }} zł</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @empty         
        @endforelse
        <div class="col mb-3">
            <h4 class="">Nazwa zestawu:</h4>
            <input class="form-control" name="name" type="text" placeholder="Podaj nazwę" required />
        </div>
        <div class="col">
            <h4 class="">Udostępnić zestaw?</h4>
            <select class="form-control" name="param_required[]">
                <option value="y">Tak</option>
                <option value="n">Nie</option>
            </select>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-primary w-25 center">Zapisz</button>
        </div>
    </div>
@endsection
