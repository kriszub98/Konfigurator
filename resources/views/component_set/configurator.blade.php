@extends('layouts.app')
@section('title', 'Konfigurator')
@section('content')
    <div class="container">
        <h5>Zastosowane parametry:</h5>
        <div>
        </div>
        <h1 class="text-center">{{ $type->name }}</h1>
        <main class="row justify-content-between">



            @forelse ($components as $component)
                <a href="{{ route('sets.addComponent', ['type' => $type, 'component' => $component]) }}" class="col-3">
                    <img src="https://images.unsplash.com/photo-1496692052106-d37cb66ab80c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGZyZWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="Component image" class="w-100 shadow-1-strong rounded" />

                    <div class="shadow-lg p-2 mb-1 bg-body rounded">
                        <h3 class="bold">{{ $component->name }}</h3>
                        <h5 class="text-danger">{{ $component->price }}</h5>
                    </div>
                </a>
            @empty
                <h1 class="text-danger text-center">Brak komponentów spełniających wymagania</h1>
            @endforelse

            @if ($components)
                {{-- <button class="btn btn-primary" href="{{ route('configurator.pass', $type) }}">Pass</button> --}}
            @endif


        </main>
    </div>
@endsection
