@extends('layouts.app')

@section('custom_styles')
<link href="{{ asset('css/addprod.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-6 col-12">
            <div class="col mt-2 d-flex justify-content-center">
                <button class="btn btn-primary d-block center" type="button" id="loadFileXml" onclick="document.getElementById('file').click();">Dodaj zdjęcie</button>
                <input type="file" style="display:none;" id="file" name="file" accept="image/*" onchange="loadFile(event)"/>
            </div>
            <div class="row mt-3">
                <img class="im" id="output" style="max-width:90%;"/>
            </div>
        </div>
        <div class="col mt-5">
            <div class="container mt-2">
                <h5>Nazwa</h5>
                <input class="form-control mb-4" name="name" type="text" placeholder="Podaj nazwę" />
                <h5>Cena</h5>
                <input class="form-control mb-4" name="price" type="text" placeholder="Podaj cenę" />
                <h5>Czy jest produkowany?</h5>
                <select class="form-control">
                    <option value="yes">Tak</option>
                    <option value="no">Nie</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="form-group">
            <h5> Parametry </h5>
            <hr class="mb-4">
            <div class="col-sm-10 mt-2">
                <div class="dynamic-wrap">
                <form role="form" autocomplete="off">
                    <div class="entry input-group">
                    <input class="form-control" name="fields[]" type="text" placeholder="Nazwa parametru" />
                    <input class="form-control" name="fields[]" type="text" placeholder="Wartość" />
                    <label class="text-center" style="font-size:1.2rem"><input type="checkbox" style="width: 2.3rem; height: 2.3rem; size:2.3rem; vertical-align:top" >Wymagane</label>
                    <span class="input-group-btn">
                        <button class="btn btn-success btn-add ms-2" type="button">
                                <span class="fa fa-plus"></span>
                        </button>
                    </span>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="form-group">
            <h5> Wymagania </h5>
            <hr class="mb-4">
            <div class="col-sm-10 mt-2">
                <div class="dynamic-wrap2">
                <form role="form" autocomplete="off">
                    <div class="entry input-group">
                    <select class="form-control">
                        <option value="cpu">Procesor</option>
                        <option value="motherboard">Płyta główna</option>
                    </select>
                    <input class="form-control" name="fields[]" type="text" placeholder="Nazwa parametru" />
                    <input class="form-control" name="fields[]" type="text" placeholder="Wartość" />
                    <span class="input-group-btn">
                        <button class="btn btn-success btn-add2 ms-2" type="button">
                                <span class="fa fa-plus"></span>
                        </button>
                    </span>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5">
        <button type="button" class="btn btn-primary w-25 center">Dodaj</button>
    </div>
</div>
@endsection
