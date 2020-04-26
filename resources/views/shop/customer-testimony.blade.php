<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{url('shopresource/winkel/images/bg_4.jpg')}});">
	<div class="container">
		<div class="row justify-content-center py-5">
			<div class="col-md-10">
				<div class="row">
				<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
					<div class="text">
					<strong style="font-size:40px" class="number" data-number="4563"> {{__('0')}} </strong>
					<span style="font-size:15px"><b>{{__('Happy Customers')}}</b></span>
					</div>
				</div>
				</div>
				<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
					<div class="text">
					<strong style="font-size:40px" class="number" data-number="5"> {{__('0')}} </strong>
					<span style="font-size:15px"> <b>{{__('Branches')}}</b> </span>
					</div>
				</div>
				</div>
				<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
					<div class="text">
					<strong style="font-size:40px" class="number" data-number="51"> {{__('0')}} </strong>
					<span style="font-size:15px"> <b>{{_('Partner')}}</b> </span>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</section>

	<section class="ftco-section testimony-section">
	<div class="container">
	<div class="row justify-content-center mb-5 pb-3">
		<div class="col-md-7 heading-section ftco-animate">
		<h2 class="mb-4"> {{__('Our satisfied customer says')}} </h2>
		<p> {{__('Our customer satisfication is Number #1! We always understanding to our customer needs')}} </p>
		</div>
	</div>
	<div class="row ftco-animate">
		<div class="col-md-12">
			<div class="carousel-testimony owl-carousel">
				@for ($i = 0; $i < 10; $i++)
					<div class="item">
						<div class="testimony-wrap p-4 pb-5">
							<div class="user-img mb-5" style="background-image: url({{url('shopresource/winkel/images/person_1.jpg')}})">
							<span class="quote d-flex align-items-center justify-content-center">
								<i class="icon-quote-left"></i>
							</span>
							</div>
							<div class="text">
							<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p class="name">Garreth Smith</p>
							<span class="position">Marketing Manager</span>
							</div>
						</div>
					</div>			
				@endfor			
			</div>
		</div>
	</div>
	</div>
	</section>