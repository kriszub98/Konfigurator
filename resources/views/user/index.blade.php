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
                        {{-- <th>Status</th> --}}
                        <th class="text-center">Blokuj</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a class='btn btn-danger d-block' href="#"><span class="glyphicon glyphicon-edit"></span>
                                    Blokuj
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="colspan-5">Nie ma użytkowników w bazie</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
