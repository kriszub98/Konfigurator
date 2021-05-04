@extends('layouts.app')

@section('custom_styles')
<link href="{{ asset('css/addprod.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
	    <form method="post" action="#" id="#">
            <div class="form-group files">
                <label>Upload Your File </label>
                <input type="file" class="form-control" multiple="">
            </div>
        </form>
	</div>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-10">
                <div class="dynamic-wrap">
                <form role="form" autocomplete="off">
                    <div class="entry input-group">
                    <input class="form-control" name="fields[]" type="text" placeholder="Type something" />
                    <input class="form-control" name="fields[]" type="text" placeholder="Type something" />
                    <span class="input-group-btn">
                        <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
@endsection
