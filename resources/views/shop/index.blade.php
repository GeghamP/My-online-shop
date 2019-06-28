@extends('layouts.master')

@section('title')
	Shopping cart
@endsection	

@section('content')
	<div class = "row">
		@foreach($products as $product)
			<div class = "col-lg-4 col-md-6 col-sm-12 card__parent">
				<div class="card" style="width: 18rem;">
					<img src="{{ $product->img_path }}" class="card-img-top image-responsive" height = "300px" alt="...">
					<div class="card-body">
						<h5 class="card-title">{{ $product->title }}</h5>
						<p class="card-text desc">{{ $product->desc }}</p>
						<div class = "clearfix">
							<div class = "float-left price"><i class="fas fa-hand-holding-usd"></i> {{ $product->price }}</div>
							<a href="#" class="btn btn-success float-right">Add to cart</a>
						</div>	
					</div>
				</div>
			</div>
		@endforeach	
	</div>
@endsection	