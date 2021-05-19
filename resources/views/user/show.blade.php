@extends('layouts.app')

@section('content')
    <h2 class="d-flex justify-content-center mt-3"> Ustawienia konta </h2>
    <div class="container d-flex justify-content-center border border-dark bg-white">
        <div class="card_container w-75 h-auto mt-5">
            <div class="rounded-circle text-center mt-2 ms-auto me-auto"
                style="width: 110px; height: 110px; background-color: #212529;">
                <span class="fa fa-lock mt-2" style="color:#F7F7F7; font-size: 80px;"> </span>
            </div>
            <h4 class="text-center mt-3">Zmiana hasła</h4>
            <form action="{{ route('users.changePassword') }}" method="POST">
                @csrf
                <div class="container">
                    <h6> Nowe hasło: </h6>
                    <input type="password" class="d-block w-100" name="newPass">
                    <h6> Powtórz nowe hasło: </h6>
                    <input type="password" class="d-block w-100" name="repeatNewPass">
                    <div class="form-group row d-flex justify-content-center mt-3">
                        <button class="btn btn-outline-success w-auto d-block center" type='submit'>Zmień hasło</button>
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </div>

@endsection
