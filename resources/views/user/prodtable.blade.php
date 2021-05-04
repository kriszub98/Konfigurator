@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="row col-md-6 col-md-offset-2 custyle">
        <div class="col d-flex justify-content-center mt-3">
            <h1>Procesory</h1>
        </div>
        <div class="row d-flex justify-content-center mt-2">
            <a href="{{ route('user.addprod') }}" type="submit" class="btn btn-primary btn-lg w-25">Dodaj</a>
        </div>
        <table class="table mt-3 text-center border" style="background:white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Edycja</th>
                <th>Usuń</th>
            </tr>
        </thead>
                <tr>
                    <td>1</td>
                    <td>Intel i5</td>
                    <td><a class="btn btn-success btn-xs" href="#"><span class="glyphicon glyphicon-edit"></span> Edytuj </a></td>
                    <td><a class="btn btn-danger btn-xs" href="#"><span class="glyphicon glyphicon-remove"></span> Usuń </a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Intel i3</td>
                    <td><a class="btn btn-success btn-xs" href="#"><span class="glyphicon glyphicon-edit"></span> Edytuj </a></td>
                    <td><a class="btn btn-danger btn-xs" href="#"><span class="glyphicon glyphicon-remove"></span> Usuń </a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Intel i7</td>
                    <td><a class="btn btn-success btn-xs" href="#"><span class="glyphicon glyphicon-edit"></span> Edytuj </a></td>
                    <td><a class="btn btn-danger btn-xs" href="#"><span class="glyphicon glyphicon-remove"></span> Usuń </a></td>
                </tr>
        </table>
        </div>
</div>
@endsection
