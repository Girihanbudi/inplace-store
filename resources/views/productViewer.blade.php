@extends('layouts.shop')
@section('content')

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-5 ftco-animate">
				<a href="images/menu-2.jpg" class="image-popup"><img src="/shopresource/winkel/images/product-1.jpg" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
				<h3> {{$product[0]->name}} </h3>
				<div class="rating d-flex">
					<p class="text-left mr-4">
						@php
							$count = $product[0]->rating / 100 * 5 //5 STAR
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
					<p class="text-left mr-4">
						<a href="#" class="mr-2" style="color: #000;">{{$product[0]->rating}} <span style="color: #bbb;">Rating</span></a>
					</p>
					<p class="text-left">
						<a href="#" class="mr-2" style="color: #000;">1 <span style="color: #bbb;">Sold</span></a>
					</p>
				</div>
				<p class="price"><span> Rp <?php echo number_format($product[0]->price)?> </span></p>
				<p> {{$product[0]->describe}} </p>
				<p>Jaket jeans unik dan menarik yang membuat mu lebih percaya diri beraktivitas seharian diluar rumah. Terbuat dari bahan yang nyaman dengan serat berkualitas. terdapat 2 varian warna yakni biru dan hitam yang membuatmu tampil lebih trendy</p>
				<div class="row mt-4">
					<form action="/cart/addproduct" method="post">
						{{ csrf_field() }}
					<input type="hidden" id="user_id" name="user_id" value="{{Auth::User()->id}}">


						<div class="form-group d-flex">						
							<select name="size" id="size" class="form-control">
								<?php
									$arr = []
								?>
									
								@foreach ($product as $item)
									@if (in_array($item->size, $arr,TRUE))
										<?php continue?>
									@else
										<option value="{{$item->size}}"> {{$item->size}} </option>	
									@endif

									<?php
										array_push($arr, $item->size)
									?>
								@endforeach
							</select>
						</div>
						
						<div class="w-100"></div>
						<div class="form-group d-flex">
								
							<select name="color" id="color" class="form-control">
								<?php
									$arr = []
								?>
									
								@foreach ($product as $item)
									@if (in_array($item->color, $arr,TRUE))
										<?php continue?>
									@else
										<option id="{{$item->color}}" value="{{$item->color}}"> {{$item->color}} </option>	
									@endif

									<?php
										array_push($arr, $item->color)
									?>
								@endforeach
							</select>
						</div>

						<div class="w-100"></div>
						<div class="input-group col-md-8 d-flex mb-3">
							<span class="input-group-btn mr-2">
								<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
									<i class="ion-ios-remove"></i>
								</button>
							</span>
							<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
							<span class="input-group-btn ml-2">
								<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
									<i class="ion-ios-add"></i>
								</button>
							</span>
						</div>
						<div class="w-100"></div>
						<div >
							<?php
								$total_item = 0
							?>

							@foreach ($product as $item)
								<?php $total_item += $item->quantity?>
							@endforeach

							<p style="color: #000;"> {{$total_item}} product available </p>							
						</div>
						<button type="submit" class="btn btn-dark py-3 px-5">Add to Cart</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
	  <div class="col-md-12 heading-section text-center ftco-animate">
		<h2 class="mb-4">Ralated Products</h2>
	  </div>
	</div>   		
	</div>
	@include('shop.selected-products')
</section>

@endsection