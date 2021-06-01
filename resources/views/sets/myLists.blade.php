@extends('layouts.app')
@section('title', 'Moje zestawy')
@section('content')

<div class="container">
<div class="row">

	<div class="col col-md-8">
		<div class="card-body">
			<div class="row">
				<div class="col-12">
				<div class="row">
					<div class="col"><h1 style="color: black;" class="card-title">Nazwa zestawu</h1></div>
					<div class="col" style="display: flex; justify-content: flex-end;">
						<p class="card-text" style="background-color: transparent; border: none; outline: none;">
						<i class="fa fa-user"></i> 
						User</p>
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
							<p  class="card-text">Liczba ocen (public)</p>
						</div>
					</div>
				</div>  
				<div class="col-12 mt-1">
					<h4 class="card-title">Cena?</h4>
				</div>
				<div class="col-12 mt-1">
					<button class="card-title">usun</button>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
@endsection
