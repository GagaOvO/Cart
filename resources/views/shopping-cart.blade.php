@extends('layouts.app')
	@section('content')

			@if (Session::has('cart'))
				<div class="row">
					<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
						<ul class="list-group">
							@foreach($products AS $value)
								<li class="list-group-item">
									<span class="badge">{{$value['qty']}}</span>
									<strong>{{$value['item']['product_name']}}</strong>
									<span class="label label-success">{{$value['price']}}</span>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
						<strong>Total: {{ $TotalPrice }}</strong>
					</div>
				</div>
				@else
				<div class="row">
					<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
						<h2>No Items In Cart</h2>
					</div>
				</div>
@endif
	@endsection