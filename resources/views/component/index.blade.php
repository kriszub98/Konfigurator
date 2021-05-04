@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row mt-3">
            <h1 class="d-flex justify-content-center"> Zarządzaj podzespołami </h1>
            <div class="row row-cols-2 row-cols-md-4 g-3">
                <div class="col">
                    <a class="card-block stretched-link text-decoration-none"
                        href="{{ route('components.showOfType', 1) }}">
                        <div class="card w-75">
                            <img src="../img/cpu.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Procesory</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="card-block stretched-link text-decoration-none" href>
                        <div class="card w-75">
                            <a class="card-block stretched-link text-decoration-none"
                                href="{{ route('components.showOfType', 2) }}">
                                <img src="../img/motherboard.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-center">Płyty główne</h5>
                                </div>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="card-block stretched-link text-decoration-none"
                        href="{{ route('components.showOfType', 3) }}">
                        <div class="card w-75">
                            <img src="../img/ram.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">RAM</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="card-block stretched-link text-decoration-none"
                        href="{{ route('components.showOfType', 4) }}">
                        <div class="card w-75">
                            <img src="../img/gpu.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Karty graficzne</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="card-block stretched-link text-decoration-none"
                        href="{{ route('components.showOfType', 5) }}">
                        <div class="card w-75">
                            <img src="../img/hdd.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Dyski HDD</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="card-block stretched-link text-decoration-none"
                        href="{{ route('components.showOfType', 6) }}">
                        <div class="card w-75">
                            <img src="../img/ssd.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Dyski SSD</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="card-block stretched-link text-decoration-none"
                        href="{{ route('components.showOfType', 7) }}">
                        <div class="card w-75">
                            <img src="../img/cooler.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Chłodzenie CPU</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="card-block stretched-link text-decoration-none"
                        href="{{ route('components.showOfType', 8) }}">
                        <div class="card w-75">
                            <img src="../img/psu.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Zasilacze</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="card-block stretched-link text-decoration-none"
                        href="{{ route('components.showOfType', 9) }}">
                        <div class="card w-75">
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
