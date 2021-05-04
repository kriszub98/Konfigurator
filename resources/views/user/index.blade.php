@extends('layouts.app')

@section('custom_styles')
    <link href="{{ asset('css/users.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">


@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="table-responsive p-3">
            <table class="table table-bordered" id="dataTable" width="100%">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nazwa</th>
                        <th>Przejdź</th>
                        <th>Edycja</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nazwa</th>
                        <th>Przejdź</th>
                        <th>Edytuj</th>
                    </tr>
                </tfoot>

                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-success">Przejdź</a>
                            </td>
                            <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edytuj</a>
                            </td>
                        @empty
                            <td colspan="5">Brak testów w bazie</td>
                        </tr>
                    @endforelse

                </tbody>

            </table>
        </div>
    </div>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable
        });

    </script>
@endsection
