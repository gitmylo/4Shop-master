@extends('layouts.app')

@section('content')

	<div class="products">
		@foreach($products as $product)
			<a class="product-row no-link" href="{{ route('products.show', $product) }}">
				<img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
				<div class="product-body">
					<div>
						<h5 class="product-title"><span>{{ $product->title }}</span>
							<div>
								@if ($product->discount != 0)
									<s>&euro;{{ $product->price }}</s>
								@endif
								<em>&euro;{{ number_format($product->price - $product->discount, 2, '.', '') }}</em>
							</div>
						</h5>
						@unless(empty($product->description))
							<p>{{ $product->description }}</p>
						@endunless
					</div>
					<button class="btn btn-primary">Meer info &amp; bestellen</button>
				</div>
			</a>
		@endforeach
	</div>

@endsection
