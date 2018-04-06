@extends('store.template')
@section('content')
{{-- @include('store.partials.slider') --}}
<div class="container text-center">
	<div id="products">
		@foreach($products as $product)
			<div class="product white-panel">
				<h3>{{ $product->nombre }}</h3>
				<img src="{{ $product->imagen }}" width="200">
				<div class="product-info panel">
					<div class="product-info panel text-left">
					<h4><p>ref:   {{ $product->id }}</p></h4>
					<h4><p>material:   {{ $product->material }}</p></h4>
						</div>
					<h3><p>${{ number_format($product->precio,3) }}</p></h3>
					<p>

						<a class="btn btn-info" href="{{ route('product-detail', $product->direccion) }}"><i class="fa fa-chevron-circle-right"></i> Ver informacion</a>
						<a class="btn btn-danger" href="{{ route('carrito-add', $product->direccion) }}"><i class="fa fa-cart-plus"></i>
								</a>

					</p>

					</p>
				</div>
			</div>

		@endforeach
	</div>
				{!!$products->render()!!}
</div>
@stop
