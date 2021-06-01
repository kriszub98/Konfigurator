@extends('layouts.app')
@section('title', 'Moje zestawy')
@section('content')



	<div class="container">
		<div class="col col-md-12">
			<div class="card-body border">
				<div class="row">
					<div class="col-12">
						<h2 class="card-title text-black fw-bold text-center">Nazwa zestawu</h2> 
					</div>
					<div class="col-12 row">
						<div class="col-12 col-md-4">
							<!--//TODO: Sprawdz if  -->
							<p class="card-text">Możliwy do zrealizowania: Tak</p>
						</div>
						<div class="col-12 col-md-4">
							<p class="card-text">Ocena: 4.17/5</p>
						</div>
						<div class="col-12 col-md-4">
							<p  class="card-text">Liczba ocen: 12</p>
						</div>
					</div>  
					<div class="row">
						<div class="col d-flex justify-content-end">
							<button class="btn btn-danger ">Usuñ</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
