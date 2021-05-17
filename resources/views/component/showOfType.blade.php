@extends('layouts.app')
@section('title', 'Wyświetl komponenty')

@section('custom_styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <div class="col d-flex justify-content-center mt-3">
                <h1>{{ $type->name }}</h1>
            </div>
            <div class="row d-flex justify-content-center mt-2">
                <a href="{{ route('components.createOfType', $type->id) }}" type="submit"
                    class="btn btn-primary btn-lg w-25">Dodaj</a>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="table-responsive p-3">
            <table class="table table-bordered" id="dataTable" width="100%">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nazwa</th>
                        <th>Przejdź</th>
                        <th>Edytuj</th>
                        <th>Usuń</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nazwa</th>
                        <th>Przejdź</th>
                        <th>Edytuj</th>
                        <th>Usuń</th>
                    </tr>
                </tfoot>

                <tbody>
                    @forelse($components as $component)
                        <tr>
                            <td>{{ $component->id }}</td>
                            <td>{{ $component->name }}</td>
                            <td><a href="{{ route('components.show', $component->id) }}"
                                    class="btn btn-primary">Przejdz</a>
                            </td>
                            <td><a href="{{ route('components.edit', $component->id) }}"
                                    class="btn btn-warning">Edytuj</a>
                            </td>
                            <td><a href="{{ route('components.edit', $component->id) }}" class="btn btn-danger">Usuń</a>
                            </td>
                        @empty
                            <td colspan="5">Brak komponentów w bazie</td>
                        </tr>
                    @endforelse

                </tbody>

            </table>
        </div>
    </div>


    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>
@endsection
