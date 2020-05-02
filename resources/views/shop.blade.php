@extends('layouts.shop')
@section('content')

  <section class="ftco-section bg-light">
	  <div class="container">
		  <div class="row">
			  <div class="col-md-8 col-lg-10 order-md-last">
				  <div class="row">
					  @foreach ($products as $product)
						  					  
					  <div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
						  <div class="product">
							  <a href="/product/{{$product->id}}" class="img-prod"><img class="img-fluid" src="/shopresource/winkel/images/product-8.jpg" alt="Colorlib Template">
								  <div class="overlay"></div>
							  </a>
							  <div class="text py-3 px-3">
								  <h3><a href="#"> {{$product->name . ' - '. $product->color . ' ('.$product->size.')'}} </a></h3>
								  <div class="d-flex">
									  <div class="pricing">
										  <p class="price"><span> <?php echo number_format($product->price)?> </span></p>
									  </div>
									  <div class="rating">
										  <p class="text-right">
											@php
												$count = $product->rating / 100 * 5 //5 STAR
												// if ($count > 5) $count = 5
											@endphp  

											@for ($i=0; $i < 5; $i++)
												@if ($i < $count)
													<a href="#"><span class="ion-ios-star"></span></a>
												@else 
													<a href="#"><span class="ion-ios-star-outline"></span></a>
												@endif
											@endfor
										  </p>
									  </div>
								  </div>
								  <p class="bottom-area d-flex px-3">
									  <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
									  <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
								  </p>
							  </div>
						  </div>
					  </div>
					  @endforeach
				  </div>
				  <div class="row mt-5">
				<div class="col text-center">
				  <div class="block-27">
					<ul>
						{{ $products->links() }}
					</ul>
				  </div>
				</div>
			  </div>
			  </div>

			  <div class="col-md-4 col-lg-2 sidebar">
				  <div class="sidebar-box-2">
					  <h2 class="heading mb-4"><a href="#">Categories</a></h2>
					  <ul>
						  @foreach ($product_categories as $category)
							  <li><a href="/shop"> {{$category->name}} </a></li>
						  @endforeach
					  </ul>
				  </div>

				  <div class="sidebar-box-2">
					<h2 class="heading mb-4"><a href="#">Types</a></h2>
					<ul>
						@foreach ($product_types as $type)
							<li><a href="/shop">{{$type->name}} </a></li>
						@endforeach
					</ul>
				</div>
			  </div>

			  {{-- <div class="col-md-4 col-lg-2 sidebar">
				<div class="sidebar-box-2">
					<h2 class="heading mb-4"><a href="#">Categories</a></h2>
					<ul>
					  @foreach ($product_categories as $category)
						<form action="/shop/category?={{$category->name}}" method="get">
							  {{ csrf_field() }}
								<button name="{{$category->name}}" type="submit" value="{{$category->name}}">{{$category->name}}</button>
						</form>
					  @endforeach
					</ul>
				</div>

				<div class="sidebar-box-2">
				  <h2 class="heading mb-4"><a href="#">Types</a></h2>
				  <ul>
					  @foreach ($product_types as $type)
						<form action="/shop/category?={{$type->name}}" method="get">
							  {{ csrf_field() }}
								<button name="{{$type->name}}" type="submit" value="{{$type->name}}">{{$category->name}}</button>
						</form>
					  @endforeach
				  </ul>
			   </div>
			</div> --}}


		  </div>
	  </div>
  </section>
@endsection
