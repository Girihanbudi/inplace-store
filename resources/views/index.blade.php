@extends('layouts.shop')
@section('content')
	
	@include('shop.banner')

	@include('shop.advantages')

	@include('shop.best-seller')

	@include('shop.event-sales')

	@include('shop.selected-products')

	@include('shop.customer-testimony')
	
	<hr>

	@include('shop.subscribe')
@endsection