@extends('layouts.app')

@section('custom_styles')
<link href="{{ asset('css/users.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container d-flex justify-content-center">
<div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Login</th>
            <th>E-Mail</th>
            <th>Status</th>
            <th class="text-center">Blokuj</th>
        </tr>
    </thead>
            <tr>
                <td>1</td>
                <td>Macius1</td>
                <td>macius1@wp.pl</td>
                <td>Aktywny</td>
                <td><a class='btn btn-danger d-block' href="#"><span class="glyphicon glyphicon-edit"></span> Blokuj </a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Macius2</td>
                <td>macius2@wp.pl</td>
                <td>Aktywny</td>
                <td><a class='btn btn-danger d-block' href="#"><span class="glyphicon glyphicon-edit"></span> Blokuj </a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Macius3</td>
                <td>macius3@wp.pl</td>
                <td>Zablokowany</td>
                <td><a class='btn btn-warning d-block' href="#"><span class="glyphicon glyphicon-edit"></span> Odblokuj </a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Macius4</td>
                <td>macius4@wp.pl</td>
                <td>Zablokowany</td>
                <td><a class='btn btn-warning d-block' href="#"><span class="glyphicon glyphicon-edit"></span> Odblokuj </a></td>
            </tr>
    </table>
    </div>
</div>
@endsection
