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

        @guest

        @else
        <div class="col-12 row">
            <form action="">
                <div class="col">
                    <div class="starrating risingstar d-flex flex-row-reverse">
                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                        <button class="btn btn-warning">Oceń</button>
                    </div>                
                </div>
            </form>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="form-group">
                    <label for="Textarea1">
                        <h4>Skomentuj</h4>
                    </label>
                    <textarea name="description" class="form-control" id="Textarea1" rows="3"></textarea>
                    <button class="btn btn-primary w-25 mt-2">Dodaj</button>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="form-group">
                    <h4>Komentarze</h4>
                    <div class="row comment">
                        <div class="head">
                            <small><strong class="">Nick</strong> 30.10.2017 12:13</small>
                        </div>    
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non lorem elementum, accumsan magna sed, faucibus mauris. Nulla pellentesque ante nibh, ac hendrerit ante fermentum sed. Nunc in libero dictum, porta nibh pellentesque, ultrices dolor. Curabitur nunc ipsum, blandit vel aliquam id, aliquam vel velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed sit amet mi dignissim, pretium justo non, lacinia libero. Nulla facilisi. Donec id sem velit. </p>
                    </div>
                </div>
            </div>
        </div>

        @endguest

    </div>

    
@endsection

