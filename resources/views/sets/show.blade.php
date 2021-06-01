@extends('layouts.app')
@section('title', 'Lista')
@section('custom_styles')
    <link href="{{ asset('css/sets.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        @forelse ($set->components as $component)
            <div class="card mb-3">
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

        <div class="col">
           <h4 class="text-danger">Cena zestawu: {{ $set->components->sum('price') }} zł</h4>
        </div>
        

        @guest

        @else
            @if (!$set->ratings->contains('user_id', Auth::id()))
                <div class="col">
                    <form method="POST" action="{{ route('sets.rate', ['set' => $set]) }}">
                        @csrf
                        <div class="col d-flex justify-content-left">
                            <div class="starrating risingstar d-flex flex-row-reverse">
                                <button class="btn btn-primary h-50 mt-3 ms-4">Oceń</button>
                                <input type="radio" id="star5" name="rate" value="5" /><label for="star5"
                                    title="5 star"></label>
                                <input type="radio" id="star4" name="rate" value="4" /><label for="star4"
                                    title="4 star"></label>
                                <input type="radio" id="star3" name="rate" value="3" /><label for="star3"
                                    title="3 star"></label>
                                <input type="radio" id="star2" name="rate" value="2" /><label for="star2"
                                    title="2 star"></label>
                                <input type="radio" id="star1" name="rate" value="1" /><label for="star1"
                                    title="1 star"></label>

                            </div>
                        </div>
                    </form>
                </div>
            @endif

            <div class="col mt-3">
                <div class="row">
                    <form action="{{ route('sets.comment', ['set' => $set]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Textarea1">
                                <h4>Skomentuj</h4>
                            </label>
                            <textarea name="content" class="form-control" id="Textarea1" rows="3"></textarea>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary w-25 mt-2">Dodaj</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 col-md-12 mt-5">
                <div class="row">
                    <div class="form-group">
                        <h4>Komentarze</h4>
                        @forelse($set->comments as $comment)
                            <div class="col-12 col-md-12 border mt-3 bg-white">
                                <div class="row" style="background-color: #F5F5F5;">
                                    <div class="col">
                                        <p class="text-left">{{ $comment->user->name }}</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-end">{{ $comment->updated_at }}</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p class="text-break">{{ $comment->content }}</p>
                                </div>

                            </div>
                            @if (Auth::user()->role->name == 'Administrator')
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-danger" href="{{ route('comments.delete', $comment) }}">Usuń
                                        komentarz</a>
                                </div>
                            @endif
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>

        @endguest

    </div>


@endsection
