@extends('layouts.app')
@section('title', 'Moje zestawy')
@section('content')
    <style>
        h2, p{
            color: black;
        }

    </style>
    <div class="container">
        @forelse($sets as $set)
            <a href="{{ route('sets.show', $set) }}">
                <div class="row card-body border mb-2">
                    <div class="col-md-12 col-12">
                        <h2 class=" text-black fw-bold text-center">{{ $set->name }}</h2>
                        <p class="text-end">
                            <i class="fa fa-user"></i> {{ $set->user->name }}</p>
                    </div>

                    <div class="col-12 row">
                        <div class="col-12 col-md-4">
                            @if ($set->components->contains('is_produced', 0))
                                <p class="card-text">Możliwy do zrealizowania: Nie</p>
                            @else
                                <p class="card-text">Możliwy do zrealizowania: Tak</p>
                            @endif
                        </div>
                        

                        @if ($set->is_public == 1)
                            <div class="col-12 col-md-4">
                                <p class="card-text">Ocena: {{ $set->ratings->avg('rate') }}/5</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <p class="card-text">Liczba ocen: {{ $set->ratings->count() }}</p>
                            </div>
                        @else
                            <p class="col-12 col-md-8">Zestaw prywatny</p>
                        @endif

                        <div class="col-12 col-md-4 mt-2">
                            <p class="card-text text-danger fs-5">Cena: {{ $set->components->sum('price') }} zł</p>
                        </div>

                    </div>

                    @guest
                    @else
                        @if (Auth::user()->role->name == 'Administrator' || $set->user->id == Auth::id())
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <form action="{{ route('sets.destroy', $set) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Usuń</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endguest
                </div>
            </a>
        @empty
        @endforelse
    </div>
@endsection
