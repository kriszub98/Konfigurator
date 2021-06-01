@extends('layouts.app')
@section('title', 'Moje zestawy')
@section('content')

<div class="container">
	<div class="col col-md-12">
		<div class="card-body border">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col">
							<h4 class="card-title text-black">Nazwa zestawu</h4>
						</div>
					</div>    
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col md-3 col-12">
							<p class="card-text">Możliwy do zrealizowania?</p>
						</div>
						<div class="col md-3 col-12">
							<p class="card-text">Prywatny lub ocena(public)</p>
						</div>
						<div class="col md-3 col-12">
							<p  class="card-text">Liczba ocen(public)</p>
						</div>
					</div>
				</div>  
				<div class="row">
					<div class="col mt-1">
						<h5 class="card-title text-danger">Cena?</h5>
					</div>
					<div class="col d-flex justify-content-end">
						<button class="btn-danger">Usuñ</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
