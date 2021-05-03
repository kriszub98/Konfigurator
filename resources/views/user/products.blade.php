@extends('layouts.app')

@section('custom_styles')
<link href="{{ asset('css/users.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row mt-3">
        <h1 class="d-flex justify-content-center"> Zarządzaj podzespołami </h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <a class="card-block stretched-link text-decoration-none" href>
                    <div class="card h-150">
                        <img src="../img/cpu.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">Procesory</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card-block stretched-link text-decoration-none" href>
                    <div class="card h-150">
                        <img src="../img/motherboard.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">Płyty główne</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card-block stretched-link text-decoration-none" href>
                    <div class="card h-150">
                        <img src="../img/ram.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">RAM</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card-block stretched-link text-decoration-none" href>
                    <div class="card h-150">
                        <img src="../img/gpu.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">Karty graficzne</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card-block stretched-link text-decoration-none" href>
                    <div class="card h-150">
                        <img src="../img/hdd.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">Dyski HDD</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card-block stretched-link text-decoration-none" href>
                    <div class="card h-150">
                        <img src="../img/ssd.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">Dyski SSD</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card-block stretched-link text-decoration-none" href>
                    <div class="card h-150">
                        <img src="../img/cooler.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">Chłodzenie CPU</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card-block stretched-link text-decoration-none" href>
                    <div class="card h-150">
                        <img src="../img/psu.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">Zasilacze</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card-block stretched-link text-decoration-none" href>
                    <div class="card h-150">
                        <img src="../img/case.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">Obudowy</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
