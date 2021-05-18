@extends('layouts.app')

@section('title', 'Edytuj podzespół')
@section('custom_styles')
    <link href="{{ asset('css/addprod.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <form role="form" action="{{ route('components.update', $component) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Component data --}}
            <div class="row">
                <div class="col col-md-6 col-12">
                    <div class="row mt-3">
                        <img class="im" id="output" style="max-width:90%;" src="{{ $component->photo_path }}"
                            alt="Zdjęcie komponentu" />
                    </div>
                </div>
                <div class="col mt-5">
                    <div class="container mt-2">
                        <h5>Nazwa</h5>
                        <input class="form-control mb-4" name="name" type="text" placeholder="Podaj nazwę"
                            value="{{ $component->name }}" required />

                        <h5>Cena</h5>
                        <input class="form-control mb-4" name="price" type="text" placeholder="Podaj cenę"
                            value="{{ $component->price }}" required />

                        <h5>Czy jest produkowany?</h5>
                        <select class="form-control" name="is_produced">
                            <option value="1" @if ($component->is_produced) selected="selected" @endif>Tak</option>
                            <option value="0" @if (!$component->is_produced) selected="selected" @endif>Nie</option>
                        </select>

                    </div>
                </div>
            </div>

            {{-- Component parameters --}}
            <div class="row mt-5">
                <div class="form-group">
                    <h5>Parametry</h5>
                    <hr class="mb-4">

                    <div class="col-sm-10 mt-2">
                        <div class="dynamic-wrap">
                            @forelse ($component->properties as $property)
                                <div class="entry input-group mb-3">
                                    <input class="form-control" name="param_names[]" type="text"
                                        placeholder="Nazwa parametru" autocomplete="off" value="{{ $property->name }}" />

                                    <input class="form-control" name="param_values[]" type="text" placeholder="Wartość"
                                        autocomplete="off" value="{{ $property->value }}" />
                                </div>
                            @empty

                            @endforelse

                            <div id="inputFormRow">
                                <div class="input-group mb-3 ">
                                    <input class="form-control" name="param_names[]" type="text" placeholder="Nazwa parametru" autocomplete="off" />
                                    <input class="form-control" name="param_values[]" type="text" placeholder="Wartość" autocomplete="off" />
                                    <select class="form-control" name="param_required[]"><option value="1">Wymagane</option><option value="0">Nie wymagane</option></select>
                                    <div class="input-group-append">                
                                        <button id="removeRow" type="button" class="btn btn-danger"><span class="fa fa-minus"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div id="newRow"></div>
                                <button id="addRow" type="button" class="btn btn-success"><span class="fa fa-plus"></span></button>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- Component requirements --}}
            <div class="row mt-5">
                <h5> Wymagania </h5>
                <hr class="mb-4">
                <div class="col-sm-10 mt-2">
                    @forelse ($component->requirements as $requirement)
                    <div class="entry input-group">
                            <select class="form-control" name="requirement_type[]">
                                @forelse ($types as $type)
                                    @if ($type->id >= $component->type->id)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endif 
                                @empty
                                    <option value=""></option>
                                @endforelse
                            </select>
                            <input class="form-control" name="requirement_names[]" type="text"
                                 placeholder="Nazwa parametru" value="{{ $requirement->property->name }}" />
                            <input class="form-control" name="requirement_values[]" type="text"
                                 placeholder="Wartość" value="{{ $requirement->property->value }}" />
                        </div>
                        @empty
                        @endforelse
                    <div class="entry input-group">
                        <div class="col-lg-12">
                            <div id="inputFormRow2">
                                <div class="input-group mb-3 ">
                                    <select class="form-control" name="requirement_type[]">
                                        @forelse ($types as $type)
                                            @if ($type->id >= $component->type->id)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endif 
                                        @empty
                                            <option value=""></option>
                                        @endforelse
                                    </select>
                                    <input class="form-control" name="requirement_names[]" type="text" placeholder="Nazwa parametru" />
                                    <input class="form-control" name="requirement_values[]" type="text" placeholder="Wartość" />
                                    <div class="input-group-append">                
                                        <button id="removeRow2" type="button" class="btn btn-danger"><span class="fa fa-minus"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div id="newRow2"></div>
                                <button id="addRow2" type="button" class="btn btn-success"><span class="fa fa-plus"></span></button>
                        </div>
                    </div>
                </div>
            </div>
  
            <div class="row d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary w-25 center">Edytuj</button>
            </div>
        </form>
    </div>

    <script>
        $("#addRow").click(function () 
        {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += ' <input class="form-control" name="param_names[]" type="text" placeholder="Nazwa parametru" autocomplete="off" />';
            html += ' <input class="form-control" name="param_values[]" type="text" placeholder="Wartość" autocomplete="off" />';
            html += ' <select class="form-control" name="param_required[]"><option value="1">Wymagane</option><option value="0">Nie wymagane</option></select>';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger"><span class="fa fa-minus"></span></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
        });

        $("#addRow2").click(function () 
        {
            var html = '';
            html += '<div id="inputFormRow2">';
            html += '<div class="input-group mb-3">';
            html += `<select class="form-control" name="requirement_type[]">@forelse ($types as $type) @if ($type->id >= $component->type->id)<option value="{{ $type->id }}">{{ $type->name }}</option>@endif  @empty<option value=""></option>@endforelse</select>`;
            html += '<input class="form-control" name="requirement_names[]" type="text" placeholder="Nazwa parametru" />';
            html += '<input class="form-control" name="requirement_values[]" type="text" placeholder="Wartość" />';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow2" type="button" class="btn btn-danger"><span class="fa fa-minus"></span></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow2').append(html);
        });

        // remove row2
        $(document).on('click', '#removeRow2', function () {
        $(this).closest('#inputFormRow2').remove();
        });
    </script>
@endsection
