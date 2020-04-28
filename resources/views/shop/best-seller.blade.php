<section class="ftco-section bg-light">
	<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
		<div class="col-md-12 heading-section text-center ftco-animate">
		<h2 class="mb-4">Best Sellers</h2>
		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
		</div>
	</div>   		
	</div>
	<div class="container">
		<div class="row">

			@foreach ($best_sellers as $item)			
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="/shopresource/winkel/images/product-1.jpg" alt="Colorlib Template">
							<span class="status">25%</span>
							<div class="overlay"></div>
						</a>
						<div class="text py-3 px-3">
							<h3><a href="#"> {{$item->name . ' - '. $item->color . ' ('.$item->size.')'}} </a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span class="mr-2 price-dc"> {{$item->price}} </span><span class="price-sale">  {{$item->price - ($item->price * 0.25)}}</span></p>
								</div>
								<div class="rating">
									<p class="text-right">

										@php
											$count = $item->rating / 100 * 5 //5 STAR
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
	</div>
	</section>