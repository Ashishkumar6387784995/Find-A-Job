@extends('landing-page.layouts.default')
@section('content')



<div class="padding-top-bottom-90 bg-light">
	<div class="container-fluid wrapper-content-slider">
		<div class="row align-items-center">
			<div class="col-xl-6 wrppaer-location">
				<div class="me-0 mt-2 pe-0 me-xl-5 pe-xl-5">
					@if ($sectionData && isset($sectionData['section_1']) && $sectionData['section_1']['section_1'] == 1)
					{{--<div class="iq-title-box mb-5">
						<div class="iq-title-box">
							<h2 class="text-capitalize line-count-3">
								{{ $sectionData['section_1']['title']}}
								<!-- Your Instant Connection to Right -->
								<span class="highlighted-text">
									<span class="highlighted-text-swipe"></span>
									<span class="highlighted-image">
										<svg xmlns="http://www.w3.org/2000/svg" width="254" height="11" viewBox="0 0 254 11" fill="none">
											<path
												d="M2 9C3.11607 8.76081 129.232 -2.95948 252 4.4554"
												stroke="currentColor"
												stroke-width="4"
												stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
									</span>
								</span>
							</h2>
							<p class="iq-title-desc line-count-3 text-body mt-3 mb-0">
								{{ $sectionData['section_1']['description'] ?? null }}
							</p>
						</div>
					</div>--}}
					<location-search :user_id="{{json_encode($auth_user_id)}}" :postjobservice="{{$postjobservice}}"></location-search>
					@endif

				</div>
			</div>
			@if($sectionData['section_1']['enable_popular_provider'] == "on")
			<!-- <div class="col-xl-6 px-xl-0 mt-xl-0 mt-5">
				<div class="position-relative swiper iq-team-slider overflow-hidden mySwiper">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<div class="mt-5 justify-content-center service-slide-items-4">
								<div class="col">
									<div class="iq-banner-img position-relative">
										<img src="{{asset('images/user/plumber.png')}}" alt="provider-image" class="img-fluid border-radius-12 position-relative">
										<div class="position-relative d-flex justify-content-center card-box">
											<div class="card-description d-inline-block text-center rounded-3">
												<div class="cart-content">
													<h6 class="heading text-capitalize fw-500">Plumbers</h6>
													<span class="desc d-flex align-items-center justify-content-center">
														<div class="d-flex align-items-center gap-1 flex-wrap">
															<span class="star" data-rating="5"></span>
														</div>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="mt-5 justify-content-center service-slide-items-4">
								<div class="col">
									<div class="iq-banner-img position-relative">
										<img src="{{asset('images/user/store.png')}}" alt="provider-image" class="img-fluid border-radius-12 position-relative">
										<div class="position-relative d-flex justify-content-center card-box">
											<div class="card-description d-inline-block text-center rounded-3">
												<div class="cart-content">
													<h6 class="heading text-capitalize fw-500">Stores</h6>
													<span class="desc text-white d-flex align-items-center justify-content-center">
														<div class="d-flex align-items-center gap-1 flex-wrap">
															<span class="star" data-rating="5"></span>

														</div>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="mt-5 justify-content-center service-slide-items-4">
								<div class="col">
									<div class="iq-banner-img position-relative">
										<img src="{{asset('images/user/category.png')}}" alt="provider-image" class="img-fluid border-radius-12 position-relative">
										<div class="position-relative d-flex justify-content-center card-box">
											<div class="card-description d-inline-block text-center rounded-3">
												<div class="cart-content">
													<h6 class="heading text-capitalize fw-500">Categories</h6>
													<span class="desc text-white d-flex align-items-center justify-content-center">
														<div class="d-flex align-items-center gap-1 flex-wrap">
															<span class="star" data-rating="5"></span>
														</div>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="mt-5 justify-content-center service-slide-items-4">
								<div class="col">
									<div class="iq-banner-img position-relative">
										<img src="{{asset('images/user/electronic.png')}}" alt="provider-image" class="img-fluid border-radius-12 position-relative">
										<div class="position-relative d-flex justify-content-center card-box">
											<div class="card-description d-inline-block text-center rounded-3">
												<div class="cart-content">
													<h6 class="heading text-capitalize fw-500">Electronics</h6>
													<span class="desc text-white d-flex align-items-center justify-content-center">
														<div class="d-flex align-items-center gap-1 flex-wrap">
															{{-- <div class="star-rating">
                                                            <rating-component :readonly="true" :showrating="false" :ratingvalue="{{ $providers_service_rating }}" />
														</div>
														<h6 class="m-0 font-size-12 rating-text lh-1">5</h6> --}}
														<span class="star" data-rating="5"></span>
												</div>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div> -->

	<div class="col-xl-6 px-xl-0 mt-xl-0 mt-5">
		<!-- <div class="sliderr" id="sliderr">
		<div class="slidess" id="slidess">
			<div class="slidee" >Plumbers</div>
			<div class="slidee" >Stores</div>
			<div class="slidee" >Categories</div>
			<div class="slidee" >Electronics</div>
		</div>
		</div> -->


		<div class="typing-animation"><a class="typewrite" data-period="2000" data-type="[ &quot;Directory&quot;, &quot;Deal&quot;, &quot;People&quot;, &quot;Local&quot; ,&quot;Shopping&quot; ]">
          <span class="wrap">&nbsp;</span>
        </a></div>
	</div>


		@endif
	</div>
</div>
</div>



<div class="section-padding-custom">
	<div class="container">


		<div class="row">
			<div class="col-md-12">
				<!-- Tabs Navigation -->
				<ul class="nav nav-tabs custom-tabs justify-content-center" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button">
							<i class="bi bi-house-door me-2"></i>All
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button">
							<i class="bi bi-car-front me-2"></i>Services
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="deals-tab" data-bs-toggle="tab" data-bs-target="#deals" type="button">
							<i class="bi bi-gear-wide-connected me-2"></i>Deals
						</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="nav-link" id="jobs-tab" data-bs-toggle="tab" data-bs-target="#jobs" type="button">
							<i class="bi bi-gear-wide-connected me-2"></i>Jobs
						</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="nav-link" id="property-tab" data-bs-toggle="tab" data-bs-target="#property" type="button">
							<i class="bi bi-gear-wide-connected me-2"></i>Property
						</button>
					</li>


					<li class="nav-item" role="presentation">
						<button class="nav-link" id="ecommerce-tab" data-bs-toggle="tab" data-bs-target="#ecommerce" type="button">
							<i class="bi bi-gear-wide-connected me-2"></i>Ecommerce
						</button>
					</li>


					<li class="nav-item" role="presentation">
						<button class="nav-link" id="marketplace-tab" data-bs-toggle="tab" data-bs-target="#marketplace" type="button">
							<i class="bi bi-gear-wide-connected me-2"></i>Marketplace
						</button>
					</li>


					<li class="nav-item" role="presentation">
						<button class="nav-link" id="shop-tab" data-bs-toggle="tab" data-bs-target="#shop" type="button">
							<i class="bi bi-gear-wide-connected me-2"></i>Shops
						</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="nav-link" id="webs-tab" data-bs-toggle="tab" data-bs-target="#webs" type="button">
							<i class="bi bi-gear-wide-connected me-2"></i>Webs
						</button>
					</li>
				</ul>

				<!-- Tab Content -->
				<div class="tab-content mt-5" id="myTabContent">
					<!-- Home Services Tab -->
					<div class="tab-pane fade show active" id="all" role="tabpanel">

						<div class="row">
							@foreach($servicesList as $services)
								@if(getMediaFileExit($services, 'service_attachment'))
								
									@php 
										$attchments = $services->getMedia('service_attachment');
										$filePath = 'storage/'.$attchments[0]->id .'/'.$attchments[0]->file_name;
									@endphp
									<div class="col-lg-2 col-md-3 col-sm-4 col-4">
										<div class="service_box">
											<div class="img-box img-box1">
												<a href="{{url('/service-detail/'.$services->id)}}">
													<img src="{{asset($filePath) }}" class="img-fluid"/>
												</a>
											</div>
											<h5><a href="{{url('/service-detail/'.$services->id)}}">{{$services->name}}</a></h5>
										</div>	
									</div>
								@endif
							@endforeach
							{{--<div class="col-lg-2 col-md-3 col-sm-4 col-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/plastering.png" class="img-fluid" /></div>
									<h5><a href="#">Plastering</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/paint.png" class="img-fluid" /></div>
									<h5><a href="#">Painting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/moving-truck.png" class="img-fluid" /></div>
									<h5><a href="#">Furniture Moving</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/delete1.png" class="img-fluid" /></div>
									<h5><a href="#">Rubbish Removal</a></h5>
								</div>

							</div>


							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/cctv.png" class="img-fluid" /></div>
									<h5><a href="#">CCTV Camera Installation</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/desk.png" class="img-fluid" /></div>
									<h5><a href="#">Fencing and deck Repaire</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/car1.png" class="img-fluid" /></div>
									<h5><a href="#">Car Stereo System Installation</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/tinted-glass1.png" class="img-fluid" /></div>
									<h5><a href="#">Car window</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/savings.png" class="img-fluid" /></div>
									<h5><a href="#">Genral House Maintenance</a></h5>
								</div>

							</div>


							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/vaccum-cleaner.png" class="img-fluid" /></div>
									<h5><a href="#">Carpet Cleaning</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/construction.png" class="img-fluid" /></div>
									<h5><a href="#">Residential Cleaning</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/washing-machine.png" class="img-fluid" /></div>
									<h5><a href="#">Laundary Washing</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/machine.png" class="img-fluid" /></div>
									<h5><a href="#">Lawn Moving</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/trash-bin.png" class="img-fluid" /></div>
									<h5><a href="#">Rubbish Cleaning</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/car.png" class="img-fluid" /></div>
									<h5><a href="#">Car Cleaning</a></h5>
								</div>

							</div>--}}



						</div>
					</div>

					<!-- Automotive Tab -->
					<div class="tab-pane fade" id="services" role="tabpanel">
						<div class="row">
							@foreach($servicesList as $services)
								@if(getMediaFileExit($services, 'service_attachment'))
								
									@php 
										$attchments = $services->getMedia('service_attachment');
										$filePath = 'storage/'.$attchments[0]->id .'/'.$attchments[0]->file_name;
									@endphp
									<div class="col-lg-2 col-md-3 col-sm-4 col-4">
										<div class="service_box">
											<div class="img-box img-box1">
												<a href="{{url('/service-detail/'.$services->id)}}">
													<img src="{{asset($filePath) }}" class="img-fluid"/>
												</a>
											</div>
											<h5><a href="{{url('/service-detail/'.$services->id)}}">{{$services->name}}</a></h5>
										</div>
									</div>
								@endif
							@endforeach

							{{--<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/plastering.png" class="img-fluid" /></div>
									<h5><a href="#">Plastering</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/paint.png" class="img-fluid" /></div>
									<h5><a href="#">Painting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/moving-truck.png" class="img-fluid" /></div>
									<h5><a href="#">Furniture Moving</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/delete1.png" class="img-fluid" /></div>
									<h5><a href="#">Rubbish Removal</a></h5>
								</div>

							</div>


							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/cctv.png" class="img-fluid" /></div>
									<h5><a href="#">CCTV Camera Installation</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/desk.png" class="img-fluid" /></div>
									<h5><a href="#">Fencing and deck Repaire</a></h5>
								</div>

							</div>--}}




						</div>
					</div>

					<!-- Technical Tab -->
					<div class="tab-pane fade" id="deals" role="tabpanel">

						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/plastering.png" class="img-fluid" /></div>
									<h5><a href="#">Plastering</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/paint.png" class="img-fluid" /></div>
									<h5><a href="#">Painting</a></h5>
								</div>

							</div>





						</div>



					</div>


					<!-- jobs Tab -->
					<div class="tab-pane fade" id="jobs" role="tabpanel">


						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/plastering.png" class="img-fluid" /></div>
									<h5><a href="#">Plastering</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/paint.png" class="img-fluid" /></div>
									<h5><a href="#">Painting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/moving-truck.png" class="img-fluid" /></div>
									<h5><a href="#">Furniture Moving</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/delete1.png" class="img-fluid" /></div>
									<h5><a href="#">Rubbish Removal</a></h5>
								</div>

							</div>


							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/cctv.png" class="img-fluid" /></div>
									<h5><a href="#">CCTV Camera Installation</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/desk.png" class="img-fluid" /></div>
									<h5><a href="#">Fencing and deck Repaire</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/car1.png" class="img-fluid" /></div>
									<h5><a href="#">Car Stereo System Installation</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/tinted-glass1.png" class="img-fluid" /></div>
									<h5><a href="#">Car window</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/savings.png" class="img-fluid" /></div>
									<h5><a href="#">Genral House Maintenance</a></h5>
								</div>

							</div>


							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/vaccum-cleaner.png" class="img-fluid" /></div>
									<h5><a href="#">Carpet Cleaning</a></h5>
								</div>

							</div>



						</div>



					</div>

					<!-- property Tab -->
					<div class="tab-pane fade" id="property" role="tabpanel">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/plastering.png" class="img-fluid" /></div>
									<h5><a href="#">Plastering</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/paint.png" class="img-fluid" /></div>
									<h5><a href="#">Painting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/moving-truck.png" class="img-fluid" /></div>
									<h5><a href="#">Furniture Moving</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/delete1.png" class="img-fluid" /></div>
									<h5><a href="#">Rubbish Removal</a></h5>
								</div>

							</div>


							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/cctv.png" class="img-fluid" /></div>
									<h5><a href="#">CCTV Camera Installation</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/desk.png" class="img-fluid" /></div>
									<h5><a href="#">Fencing and deck Repaire</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/car1.png" class="img-fluid" /></div>
									<h5><a href="#">Car Stereo System Installation</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/tinted-glass1.png" class="img-fluid" /></div>
									<h5><a href="#">Car window</a></h5>
								</div>

							</div>




						</div>

					</div>

					<!-- Ecommerce Tab -->
					<div class="tab-pane fade" id="ecommerce" role="tabpanel">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/plastering.png" class="img-fluid" /></div>
									<h5><a href="#">Plastering</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/paint.png" class="img-fluid" /></div>
									<h5><a href="#">Painting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/moving-truck.png" class="img-fluid" /></div>
									<h5><a href="#">Furniture Moving</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/delete1.png" class="img-fluid" /></div>
									<h5><a href="#">Rubbish Removal</a></h5>
								</div>

							</div>


							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/cctv.png" class="img-fluid" /></div>
									<h5><a href="#">CCTV Camera Installation</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/desk.png" class="img-fluid" /></div>
									<h5><a href="#">Fencing and deck Repaire</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/car1.png" class="img-fluid" /></div>
									<h5><a href="#">Car Stereo System Installation</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/tinted-glass1.png" class="img-fluid" /></div>
									<h5><a href="#">Car window</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/savings.png" class="img-fluid" /></div>
									<h5><a href="#">Genral House Maintenance</a></h5>
								</div>

							</div>






						</div>

					</div>


					<!-- marketplace Tab -->
					<div class="tab-pane fade" id="marketplace" role="tabpanel">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting</a></h5>
								</div>

							</div>





						</div>

					</div>

					<!-- shop Tab -->
					<div class="tab-pane fade" id="shop" role="tabpanel">
						<div class="row">
							@php $datas= @getAllShopLists(); @endphp
							@if($datas)
								@foreach($datas as $data)
									@if(getMediaFileExit($data, 'shop_attachment'))
									
										@php 
											$attchments = $data->getMedia('shop_attachment');
											$filePath = 'storage/'.$attchments[0]->id .'/'.$attchments[0]->file_name;
										@endphp
										<div class="col-lg-2 col-md-3 col-sm-4 col-4">
											<div class="service_box shop_box cursor-pointer" data-id="{{ $data->id }}" data-toggle="modal" data-target="#exampleModal">
												<div class="img-box img-box1">
													<img src="{{asset($filePath) }}" class="img-fluid"/>
												</div>
												<h5><a>{{$data->name}}</a></h5>
											</div>
										</div>
									@endif
								@endforeach
							@endif
						</div>
					</div>


					<div class="tab-pane fade" id="webs" role="tabpanel">
						<div class="row">
							<!-- Webs Tabs Navigation -->
							 <div class="col-md-12">
				
				           <ul class="nav nav-tabs custom-tabs justify-content-center" id="myTab" role="tablist">
							<li class="nav-item nav-item-1" role="presentation">
							<div  class="nav-link1 " id="allwebs-tab" data-bs-toggle="tab" data-bs-target="#allwebs">
								<div class="service_box service-box-circle ">
									<div class="img-box active"><img src="{{asset('images/home/all-list.png')}}" class="img-fluid" /></div>
									<h5><a href="#">All</a></h5>
								</div>
							</div>
						    </li>

							<li class="nav-item nav-item-1" role="presentation">
							<div  class="nav-link1 " id="news-tab" data-bs-toggle="tab" data-bs-target="#news">
								<div class="service_box service-box-circle ">
									<div class="img-box active"><img src="{{asset('images/home/news.png')}}" class="img-fluid" /></div>
									<h5><a href="#">News</a></h5>
								</div>
							</div>
						    </li>

							<li class="nav-item nav-item-1" role="presentation">
							<div  class="nav-link1" id="clean-tab" data-bs-toggle="tab" data-bs-target="#clean" >
								<div class="service_box service-box-circle">
									<div class="img-box"><img src="{{asset('images/home/mop.png')}}" class="img-fluid" /></div>
									<h5><a href="#">Clean</a></h5>
								</div>

							</div>
							</li>

							<li class="nav-item nav-item-1" role="presentation">
							<div class="nav-link1" id="process-tab" data-bs-toggle="tab" data-bs-target="#process" >
								<div class="service_box service-box-circle">
									<div class="img-box"><img src="{{asset('images/home/process.png')}}" class="img-fluid" /></div>
									<h5><a href="#">Process</a></h5>
								</div>

							</div>
							</li>

							<li class="nav-item nav-item-1" role="presentation">
							<div class="nav-link1 " id="bookmarks-tab" data-bs-toggle="tab" data-bs-target="#bookmarks">
								<div class="service_box service-box-circle" >
									<div class="img-box"><img src="{{asset('images/home/bookmarks.png')}}" class="img-fluid" /></div>
									<h5><a href="#">Bookmarks</a></h5>
								</div>

							</div>
							</li>
							</ul>


					<div class="tab-content mt-5" id="myTabContent">

                  <!-- =============Webs tab content=============== -->

				   <!-- allWebs Tab -->
						<div class="tab-pane fade" id="allwebs" role="tabpanel">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<div class="plus-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
										</svg>
									</div>
									<h5><a href="#">Add</a></h5>
								</div>

							</div>

                         </div>
                        </div>

					<!-- news Tab -->
					<div class="tab-pane fade show active" id="news" role="tabpanel">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting1</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting1</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<div class="plus-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
										</svg>
									</div>
									<h5><a href="#">Add</a></h5>
								</div>

							</div>

                         </div>
                        </div>

                        <!-- clean Tab -->
                         <div class="tab-pane fade" id="clean" role="tabpanel">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting2</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting2</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<div class="plus-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
										</svg>
									</div>
									<h5><a href="#">Add</a></h5>
								</div>

							</div>

                         </div>
                        </div>

                        <!-- process Tab -->
						<div class="tab-pane fade" id="process" role="tabpanel">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting3</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting3</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<div class="plus-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
										</svg>
									</div>
									<h5><a href="#">Add</a></h5>
								</div>

							</div>

                         </div>
                        </div>


                         <!-- bookmarks Tab -->
						<div class="tab-pane fade" id="bookmarks" role="tabpanel">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
									<h5><a href="#">Window Tinting4</a></h5>
								</div>

							</div>
							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box">
									<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
									<h5><a href="#">Water Blasting4</a></h5>
								</div>

							</div>

							<div class="col-lg-2 col-md-3 col-sm-4 col-4">
								<div class="service_box" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<div class="plus-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
										</svg>
									</div>
									<h5><a href="#">Add</a></h5>
								</div>

							</div>

                         </div>
                        </div>

					</div>


							 </div>
                         </div>
							<hr class="web-service-tabs">
                      </div>


					 

                       

						







				</div>
			</div>

		</div>
	</div>
</div>


<!-- ==================webs modal =================== -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Web</h5>
        <span class="text-primary custom-btn-close" data-dismiss="modal" aria-label="Close" onclick="jQuery('#exampleModal').modal('hide');">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41" fill="none">
                        <rect x="12" y="11.8381" width="17" height="17" fill="white"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.783 4.17017H27.233C32.883 4.17017 36.6663 8.13683 36.6663 14.0368V27.6552C36.6663 33.5385 32.883 37.5035 27.233 37.5035H12.783C7.13301 37.5035 3.33301 33.5385 3.33301 27.6552V14.0368C3.33301 8.13683 7.13301 4.17017 12.783 4.17017ZM25.0163 25.8368C25.583 25.2718 25.583 24.3552 25.0163 23.7885L22.0497 20.8218L25.0163 17.8535C25.583 17.2885 25.583 16.3552 25.0163 15.7885C24.4497 15.2202 23.533 15.2202 22.9497 15.7885L19.9997 18.7535L17.033 15.7885C16.4497 15.2202 15.533 15.2202 14.9663 15.7885C14.3997 16.3552 14.3997 17.2885 14.9663 17.8535L17.933 20.8218L14.9663 23.7718C14.3997 24.3552 14.3997 25.2718 14.9663 25.8368C15.2497 26.1202 15.633 26.2718 15.9997 26.2718C16.383 26.2718 16.7497 26.1202 17.033 25.8368L19.9997 22.8885L22.9663 25.8368C23.2497 26.1385 23.6163 26.2718 23.983 26.2718C24.3663 26.2718 24.733 26.1202 25.0163 25.8368Z"
                            fill="currentColor">
                        </path>
                  </svg>
        </span>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" onclick="jQuery('#exampleModal').modal('hide');">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- ==================webs modal =================== -->


<div class="section-padding-custom bg-light">
	<div class="container">
		<div class="d-flex align-items-center justify-content-center flex-wrap gap-2 mb-4">
			<div class="iq-title-box mb-0">
				<h3 class="text-capitalize line-count-1">Services
					<div class="highlighted-text">
						<span class="highlighted-text-swipe"></span>
						<span class="highlighted-image">
							<svg xmlns="http://www.w3.org/2000/svg" width="155" height="12" viewBox="0 0 155 12"
								fill="none">
								<path d="M2.5 9.5C3.16964 9.26081 78.8393 -2.45948 152.5 4.9554" stroke="currentColor"
									stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</span>
					</div>
				</h3>
			</div>

		</div>



		<div class="row">
			@foreach($servicesList as $services)
				@if(getMediaFileExit($services, 'service_attachment'))
				
					@php 
						$attchments = $services->getMedia('service_attachment');
						$filePath = 'storage/'.$attchments[0]->id .'/'.$attchments[0]->file_name;
					@endphp
					<div class="col-lg-2 col-md-3 col-sm-4 col-4">
						<div class="service_box">
							<div class="img-box img-box1">
								<a href="{{url('/service-detail/'.$services->id)}}">
									<img src="{{asset($filePath) }}" class="img-fluid"/>
								</a>
							</div>
							<h5><a href="{{url('/service-detail/'.$services->id)}}">{{$services->name}}</a></h5>
						</div>	
					</div>
				@endif
			@endforeach

			{{--<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/windows.png" class="img-fluid" /></div>
					<h5><a href="#">Window Tinting</a></h5>
				</div>

			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/water.png" class="img-fluid" /></div>
					<h5><a href="#">Water Blasting</a></h5>
				</div>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/plastering.png" class="img-fluid" /></div>
					<h5><a href="#">Plastering</a></h5>
				</div>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/paint.png" class="img-fluid" /></div>
					<h5><a href="#">Painting</a></h5>
				</div>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/moving-truck.png" class="img-fluid" /></div>
					<h5><a href="#">Furniture Moving</a></h5>
				</div>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/delete1.png" class="img-fluid" /></div>
					<h5><a href="#">Rubbish Removal</a></h5>
				</div>

			</div>


			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/cctv.png" class="img-fluid" /></div>
					<h5><a href="#">CCTV Camera Installation</a></h5>
				</div>

			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/desk.png" class="img-fluid" /></div>
					<h5><a href="#">Fencing and deck Repaire</a></h5>
				</div>

			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/car1.png" class="img-fluid" /></div>
					<h5><a href="#">Car Stereo System Installation</a></h5>
				</div>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/tinted-glass1.png" class="img-fluid" /></div>
					<h5><a href="#">Car window</a></h5>
				</div>

			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/savings.png" class="img-fluid" /></div>
					<h5><a href="#">Genral House Maintenance</a></h5>
				</div>

			</div>--}}






		</div>




	</div>
</div>



<div class="section-padding-custom ">
	<div class="container">
		<div class="d-flex align-items-center justify-content-center flex-wrap gap-2 mb-4">
			<div class="iq-title-box mb-0">
				<h3 class="text-capitalize line-count-1">Deals
					<div class="highlighted-text">
						<span class="highlighted-text-swipe"></span>
						<span class="highlighted-image">
							<svg xmlns="http://www.w3.org/2000/svg" width="155" height="12" viewBox="0 0 155 12"
								fill="none">
								<path d="M2.5 9.5C3.16964 9.26081 78.8393 -2.45948 152.5 4.9554" stroke="currentColor"
									stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</span>
					</div>
				</h3>
			</div>

		</div>



		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="{{asset('images/home/30discount.png')}}" class="img-fluid" /></div>

				</div>

			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="{{asset('images/home/50discount.png')}}" class="img-fluid" /></div>

				</div>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="{{asset('images/home/60discount.png')}}" class="img-fluid" /></div>

				</div>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="{{asset('images/home/75discount.png')}}" class="img-fluid" /></div>

				</div>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="{{asset('images/home/80discount.png')}}" class="img-fluid" /></div>

				</div>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="{{asset('images/home/25discount.png')}}" class="img-fluid" /></div>

				</div>

			</div>


			<!-- <div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/cctv.png" class="img-fluid" /></div>

				</div>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/cctv.png" class="img-fluid" /></div>

				</div>

			</div> -->





		</div>




	</div>
</div>




<div class="section-padding-custom ">
	<div class="container">
		<div class="d-flex align-items-center justify-content-center flex-wrap gap-2 mb-4">
			<div class="iq-title-box mb-0">
				<h3 class="text-capitalize line-count-1">Residential
					<div class="highlighted-text">
						<span class="highlighted-text-swipe"></span>
						<span class="highlighted-image">
							<svg xmlns="http://www.w3.org/2000/svg" width="155" height="12" viewBox="0 0 155 12"
								fill="none">
								<path d="M2.5 9.5C3.16964 9.26081 78.8393 -2.45948 152.5 4.9554" stroke="currentColor"
									stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</span>
					</div>
				</h3>
			</div>

		</div>



		<div class="row">

			<div class="col-lg-2 col-md-3  col-sm-3 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/construction.png" class="img-fluid" /></div>
					<h5><a href="#">Residential Cleaning</a></h5>
				</div>

			</div>

			<div class="col-lg-2 col-md-3  col-sm-3 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/property.png" class="img-fluid" /></div>
					<h5><a href="#">Residential for Rent</a></h5>

				</div>

			</div>
			<div class="col-lg-2 col-md-3  col-sm-3 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/marketplace.png" class="img-fluid" /></div>
					<h5><a href="#">Commercial for Sale</a></h5>
				</div>

			</div>
			<div class="col-lg-2 col-md-3  col-sm-3 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/machine.png" class="img-fluid" /></div>
					<h5><a href="#">Lawn Mowing</a></h5>
				</div>

			</div>



			<div class="col-lg-2 col-md-3  col-sm-3 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/washing-machine.png" class="img-fluid" /></div>
					<h5><a href="#">Laundry Washing</a></h5>
				</div>

			</div>



			<div class="col-lg-2 col-md-3  col-sm-3 col-4">
				<div class="service_box">
					<div class="img-box"><img src="https://dailycleaners.co.nz/dollarshopdev/public/images/home/delete1.png" class="img-fluid" /></div>
					<h5><a href="#">Residential for Rent</a></h5>
				</div>

			</div>









		</div>




	</div>
</div>




<section class="newsletter-section">
	<div class="container my-4">
		<div class="airmail-border d-flex flex-wrap align-items-center justify-content-between">
			<p class="mb-2 mb-md-0 fw-bold flex-grow-1">Subscribe to get the best deals right in your inbox!</p>
			<div class="input-group" style="max-width: 400px;">
				<input type="email" class="form-control" placeholder="Enter email to stay updated">
				<button class="btn subscribe-btn">Subscribe</button>
			</div>
		</div>
	</div>
</section>



<section class="stats-bar">

	<div class="container">
		<div class="row text-center justify-content-center">

			<div class="col-6 col-sm-3 mb-3 mb-sm-0">
				<div class="stats-item">
					<div class="stats-icon mb-1"><i class="fas fa-shield-alt"></i></div>
					<div class="stats-content">
						<div class="stats-number">100%</div>
						<div class="stats-label">Verified Deals</div>
					</div>
				</div>
			</div>

			<div class="col-6 col-sm-3 mb-3 mb-sm-0">
				<div class="stats-item">
					<div class="stats-icon mb-1"><i class="fas fa-store-alt"></i></div>
					<div class="stats-content">
						<div class="stats-number">360+</div>
						<div class="stats-label">Online Stores</div>
					</div>
				</div>


			</div>

			<div class="col-6 col-sm-3 stats-item mb-3 mb-sm-0">
				<div class="stats-item">
					<div class="stats-icon mb-1"><i class="fas fa-box-open"></i></div>
					<div class="stats-content">
						<div class="stats-number">691320+</div>
						<div class="stats-label">Deals listed</div>
					</div>
				</div>

			</div>

			<div class="col-6 col-sm-3 stats-item">
				<div class="stats-item">
					<div class="stats-icon mb-1"><i class="fas fa-smile"></i></div>
					<div class="stats-content">
						<div class="stats-number">115315+</div>
						<div class="stats-label">Happy Members</div>
					</div>
				</div>

			</div>

		</div>
	</div>

</section>


<!-- Categories -->
<!--@if ($sectionData && isset($sectionData['section_2']) && $sectionData['section_2']['section_2'] == 1)
<div class="section-padding">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div class="iq-title-box mb-0">
                <h3 class="text-capitalize line-count-1">{{ $sectionData['section_2']['title'] }}
                    <div class="highlighted-text">
                        <span class="highlighted-text-swipe"></span>
                        <span class="highlighted-image">
                            <svg xmlns="http://www.w3.org/2000/svg" width="155" height="12" viewBox="0 0 155 12"
                                fill="none">
                                <path d="M2.5 9.5C3.16964 9.26081 78.8393 -2.45948 152.5 4.9554" stroke="currentColor"
                                    stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </h3>
            </div>
            <a href="{{ route('category.list') }}"
                class="btn btn-link p-0 text-capitalize flex-shrink-0 font-size-14">{{__('messages.view_all')}}</a>
        </div>
        <category-section></category-section>
    </div>
</div>
@endif -->


<!-- Service -->
<!-- @if ((isset($sectionData['section_3']) && $sectionData['section_3']['section_3'] == 1) || (isset($sectionData['section_4']) && $sectionData['section_4']['section_4'] == 1))
 <div class="section-padding bg-light our-service">
    <div class="container">
        @if ($sectionData && isset($sectionData['section_3']) && $sectionData['section_3']['section_3'] == 1)
            <div>
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                <div class="iq-title-box mb-0">
                    <h3 class="text-capitalize line-count-1">{{ $sectionData['section_3']['title'] }}
                    <div class="highlighted-text">
                        <span class="highlighted-text-swipe"></span>
                        <span class="highlighted-image">
                            <svg xmlns="http://www.w3.org/2000/svg" width="155" height="12" viewBox="0 0 155 12"
                                fill="none">
                                <path d="M2.5 9.5C3.16964 9.26081 78.8393 -2.45948 152.5 4.9554" stroke="currentColor"
                                stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    </h3>
                </div>
                <a href="{{ route('service.list') }}" class="btn btn-link p-0 flex-shrink-0">{{__('messages.view_all')}}</a>
            </div>

            <service-slider-section :user_id="{{json_encode($auth_user_id)}}" :favourite="{{json_encode($favourite)}}" :type="'ac'"/>
            </div>
        @endif

        @if ($sectionData && isset($sectionData['section_4']) && $sectionData['section_4']['section_4'] == 1)
            <div class="mt-5">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div class="iq-title-box mb-0">
                    <h3 class="text-capitalize line-count-1">{{ $sectionData['section_4']['title'] }}
                        <div class="highlighted-text"><div class="swiper-pagination"></div>
                            <span class="highlighted-text-swipe"></span>
                            <span class="highlighted-image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="155" height="12" viewBox="0 0 155 12"
                                fill="none">
                                <path d="M2.5 9.5C3.16964 9.26081 78.8393 -2.45948 152.5 4.9554" stroke="currentColor"
                                    stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                    </h3>
                    </div>
                    <a href="{{ route('service.list') }}" class="btn btn-link p-0 flex-shrink-0">{{__('messages.view_all')}}</a>
                </div>
                <service-slider-section :user_id="{{json_encode($auth_user_id)}}" :favourite="{{json_encode($favourite)}}" :type="'cleaning'"/>
            </div>
        @endif
    </div>
</div>
@endif
@if($auth_user_id)
 
@if ($sectionData && isset($sectionData['section_8']) && $sectionData['section_8']['section_8'] == 1)
@php
$recentlyViewed = session()->get('recently_viewed:' . $auth_user_id, []);
session(['recently_viewed:' . $auth_user_id => $recentlyViewed]);
@endphp
@if (!empty($recentlyViewed))
<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-none"></div>
            <div class="col-lg-8 col-md-12">
                <div class="iq-title-box text-center center">
                    <h3 class="text-capitalize line-count-1">{{ $sectionData['section_8']['title'] }}
                        <span class="highlighted-text">
                            <span class="highlighted-text-swipe"></span>
                            <span class="highlighted-image">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="130" height="11" viewBox="0 0 130 11"
                                            fill="none">
                                            <path d="M2 9C2.5625 8.76081 66.125 -2.95948 128 4.4554" stroke="currentColor"
                                            stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </span>
                                </h3>
                                <p class="iq-title-desc line-count-3 text-body mt-3 mb-0">{{ $sectionData['section_8']['description'] ?? null }}</p>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-none"></div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                        <service-slider-section :user_id="{{json_encode($auth_user_id)}}" :favourite="{{json_encode($favourite)}}" :type="'recently_view'"/>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endif   -->

<!-- Provider -->

<!--@if ($sectionData && isset($sectionData['section_5']) && $sectionData['section_5']['section_5'] == 1)
<div class="bg-primary-subtle overflow-hidden">
    <div class="container provider-section position-relative">
        @php
            $images = Spatie\MediaLibrary\MediaCollections\Models\Media::where('collection_name', 'section5_attachment')->get();
        @endphp

        @if(isset($images[0]))
            <img src="{{ $images[0]->getUrl() }}" alt="service" class="img-fluid position-absolute provider provider-1">
        @else
            <img src="{{asset("landing-images/service/1.webp")}}" alt="service" class="img-fluid position-absolute provider provider-1">
        @endif

        @if(isset($images[1]))
            <img src="{{ $images[1]->getUrl() }}" alt="service" class="img-fluid position-absolute provider provider-6">
        @else
            <img src="{{asset("landing-images/service/2.webp")}}" alt="service" class="img-fluid position-absolute provider provider-6">
        @endif

        <div class="row align-items-center">
            <div class="col-md-2"></div>
                <div class="col-lg-8 col-md-12">
                    <div class="iq-title-box mb-5 text-center px-3">
                            <h2 class="text-capitalize line-count-2">{{ $sectionData['section_5']['title'] }}</h2>
                            <p class="iq-title-desc line-count-3 text-body mt-3 mb-0">{{ $sectionData['section_5']['description'] ?? null}}</p>
                    </div>
                    <div class="text-center d-flex justify-content-center align-items-center pt-3 flex-column flex-md-row px-3">
                            <a class="bg-primary py-3 px-5 fw-bolder text-white rounded-3 letter-spacing-64"
                                href="mailto:{{ $sectionData['section_5']['email'] }}">{{ $sectionData['section_5']['email'] }}</a>
                            <span class="px-3">Or</span>
                            <a href="tel:{{ $sectionData['section_5']['contact_number'] }}">
                                <h6 class="text-decoration-underline">{{ $sectionData['section_5']['contact_number'] }}</h6>
                            </a>
                    </div>
                </div>
            <div class="col-md-2"></div>
        </div>

        @if(isset($images[2]))
        <img src="{{ $images[2]->getUrl() }}" alt="service" class="img-fluid position-absolute provider provider-5">
        @else
        <img src="{{asset("landing-images/service/5.webp")}}" alt="service" class="img-fluid position-absolute provider provider-5">
        @endif

        @if(isset($images[3]))
        <img src="{{ $images[3]->getUrl() }}" alt="service" class="img-fluid position-absolute provider provider-3">
        @else
        <img src="{{asset("landing-images/service/3.webp")}}" alt="service" class="img-fluid position-absolute provider provider-3">
        @endif

        @if(isset($images[4]))
        <img src="{{ $images[4]->getUrl() }}" alt="service" class="img-fluid position-absolute provider provider-4">
        @else
        <img src="{{asset("landing-images/service/4.webp")}}" alt="service" class="img-fluid position-absolute provider provider-4">
        @endif
    </div>
</div>
@endif -->

<!--@if ($sectionData && isset($sectionData['section_9']) && $sectionData['section_9']['section_9'] == 1)
<div class="section-padding bg-light px-0">
    <div class="container-fluid px-xxl-3">
       <div class="row">
            <div class="col-12">
                <div class="iq-title-box text-center center mb-2">
                    <h3 class="text-capitalize line-count-1">{{ $sectionData['section_9']['title'] }}
                    <span class="highlighted-text">
                         
                        <span class="highlighted-image">
                            <svg xmlns="http://www.w3.org/2000/svg" width="130" height="11" viewBox="0 0 130 11"
                                fill="none">
                                <path d="M2 9C2.5625 8.76081 66.125 -2.95948 128 4.4554" stroke="currentColor"
                                stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </span>
                    </h3>
                </div>


                <div class="text-center mb-5">
                    <div class="d-inline-flex align-items-center flex-sm-row flex-column bg-body py-3 px-5 rounded-5 gap-2">
                        <div class="vertical-center lh-1">
                            <rating-component :readonly="true" :showrating="false" :ratingvalue="{{$totalRating}}" />
                            {{-- {{>components/widgets/filter-rating rating="4"}} --}}
                        </div>
                        @if (isset($sectionData['section_9']['overall_rating']) && $sectionData['section_9']['overall_rating'] == 'on')
                        <h5>{{ round($totalRating,1) }}</h5>
                        <h6>{{__('landingpage.overall_rating')}}</h6>
                        @endif
                    </div>
                    <h6 class="mt-4"> {{ $sectionData['section_9']['description'] ?? null }}</h6>
                </div>
            </div>
            <div class="col-12">
                <testimonial-section/>
            </div>
       </div>
    </div>
</div>
@endif-->

<!--@if ($sectionData && isset($sectionData['section_6']) && $sectionData['section_6']['section_6'] == 1)
<div class="section-padding">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-12">
             <div class="px-5 bg-primary rounded-3 position-relative overflow-hidden">
                <div class="position-absolute top-0 end-0">
                   <img src="{{asset('landing-images/general/pattern-bg-1.webp' )}}" alt="pattern" class="img-fluid">
                </div>
                <div class="px-xl-5">
                   <div class="px-xl-3">
                      <div class="row align-items-center">
                         <div class="col-lg-6 position-relative my-5">
                            <div class="iq-title-box">
                               <h2 class="text-capitalize text-white line-count-2">{{ $sectionData['section_6']['title'] }}</h2>
                               <p class="mt-3 mb-0 text-white line-count-3">{{ $sectionData['section_6']['description'] ?? null }}
                               </p>
                            </div>
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                              @php
                              $mediaGooglePay = Spatie\MediaLibrary\MediaCollections\Models\Media::where('collection_name', 'google_play')->first();
                              $mediaAppStore = Spatie\MediaLibrary\MediaCollections\Models\Media::where('collection_name','app_store')->first();
                              $mediaMainImage = Spatie\MediaLibrary\MediaCollections\Models\Media::where('collection_name','main_image')->first();
                              $sitesetup =   App\Models\Setting::where('type','site-setup')->where('key', 'site-setup')->first();
                              $appDownload = $sitesetup ? json_decode($sitesetup->value) : null;
                              $playStoreUrl = $appDownload && $appDownload->playstore_url ? $appDownload->playstore_url : 'https://play.google.com/';
                              $appStoreUrl = $appDownload && $appDownload->appstore_url ? $appDownload->appstore_url : 'https://apps.apple.com/';
                              @endphp
                               <a href="{{ $playStoreUrl }}" target="_blank" class="app-link">
                                 @if($mediaGooglePay)
                                 <img src="{{ url('storage/' . $mediaGooglePay->id . '/' . $mediaGooglePay->file_name) }}" alt="googleplay" class="img-fluid">
                                 @else
                                  <img src="{{asset('landing-images/general/googleplay.webp')}}" alt="googleplay"
                                     class="img-fluid">
                                 @endif
                               </a>
                               <a href="{{ $appStoreUrl }}" target="_blank" class="app-link">
                                 @if($mediaAppStore)
                                 <img src="{{ url('storage/' . $mediaAppStore->id . '/' . $mediaAppStore->file_name) }}" alt="appstore" class="img-fluid">
                                 @else
                                  <img src="{{asset('landing-images/general/appstore.webp')}}" alt="appstore"
                                     class="img-fluid">
                                 @endif
                               </a>
                            </div>
                         </div>
                         <div class="col-lg-6 mt-lg-0 mt-5 position-relative align-self-end text-center">
                           @if($mediaMainImage)
                           <img src="{{ url('storage/' . $mediaMainImage->id . '/' . $mediaMainImage->file_name) }}" alt="phone" class="img-fluid">
                            @else
                            <img src="{{asset('landing-images/general/phone.webp')}}" alt="phone" class="img-fluid">
                            @endif
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endif -->

<!--@if ($sectionData && isset($sectionData['section_7']) && $sectionData['section_7']['section_7'] == 1)
 <div class="section-padding pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="iq-title-box mb-0">
                    <h3 class="text-capitalize line-count-2">{{ $sectionData['section_7']['title'] }}
                    <span class="highlighted-text">
                        <span class="highlighted-text-swipe"></span>
                        <span class="highlighted-image">
                            <svg xmlns="http://www.w3.org/2000/svg" width="164" height="12" viewBox="0 0 164 12"
                                fill="none">
                                <path d="M2 9.5C2.71429 9.26081 83.4286 -2.45948 162 4.9554" stroke="currentColor"
                                stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </span>
                    </h3>
                </div>
            </div>
            <div class="col-lg-7 mt-lg-0 mt-3">
                <p class="m-0 line-count-3">{{ $sectionData['section_7']['description'] ?? null }}</p>
            </div>
        </div>
        @php
                $mediaVimage = Spatie\MediaLibrary\MediaCollections\Models\Media::where('collection_name', 'vimage')->first();
        @endphp

        <div class="row align-items-center mt-5 pt-lg-5">
            <div class="col-lg-6 pe-xl-5 position-relative">
                @if($mediaVimage)
                    <img src="{{ url('storage/' . $mediaVimage->id . '/' . $mediaVimage->file_name) }}" alt="video-popup" class="img-fluid w-100 rounded">
                @else
                    <img src="{{ asset('landing-images/general/popup.webp') }}" alt="video-popup" class="img-fluid w-100 rounded">
                @endif
                    @include('landing-page.components.widgets.video-popup', ['videoLinkUrl' => $sectionData['section_7']['url']])

            </div>
            <div class="col-lg-6 mt-lg-0 mt-5 ps-xl-5">
                @if(isset($sectionData['section_7']['subtitle']) && isset($sectionData['section_7']['subdescription']))
                    @for($i = 0; $i < min(count($sectionData['section_7']['subtitle']), count($sectionData['section_7']['subdescription'])); $i++)
                        <div class="mb-4 pb-4 border-bottom">
                            @include('landing-page.components.widgets.icon-box', [
                                'iconboxNumber' => $i + 1,
                                'iconboxTitle' => $sectionData['section_7']['subtitle'][$i],
                                'iconboxDescription' => $sectionData['section_7']['subdescription'][$i]
                            ])
                        </div>
                    @endfor
                @endif
            </div>
        </div>
    </div>
 </div>
@endif
 -->

@include('landing-page.shop-model')
 <style>
	
   
</style>
@endsection
@section('bottom_script')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		var $sliders = jQuery(document).find('.iq-team-slider');
		if ($sliders.length > 0) {
			$sliders.each(function() {
				let slider = jQuery(this);
				var navNext = (slider.data('navnext')) ? "#" + slider.data('navnext') : "";
				var navPrev = (slider.data('navprev')) ? "#" + slider.data('navprev') : "";
				var pagination = (slider.data('pagination')) ? "#" + slider.data('pagination') : "";
				var sliderAutoplay = slider.data('autoplay');
				if (sliderAutoplay) {
					sliderAutoplay = {
						delay: slider.data('autoplay')
					};
				} else {
					sliderAutoplay = false;
				}
				var iqonicPagination = {
					el: pagination,
					clickable: true,
					dynamicBullets: true,
				};
				var swSpace = {
					1200: 30,
					1500: 30
				};
				var breakpoint = {
					0: {
						slidesPerView: 1,
						centeredSlides: false,
						virtualTranslate: false
					},
					576: {
						slidesPerView: 1,
						centeredSlides: false,
						virtualTranslate: false
					},
					768: {
						slidesPerView: 2,
						centeredSlides: false,
						virtualTranslate: false
					},
					1200: {
						slidesPerView: 3,
						spaceBetween: swSpace["1200"],
					},
					1500: {
						slidesPerView: 3,
						spaceBetween: swSpace["1500"],
					},
				};
				var sw_config = {
					loop: true,
					speed: 1000,
					loopedSlides: 3,
					spaceBetween: 30,
					slidesPerView: 3,
					centeredSlides: false,
					autoplay: true,
					virtualTranslate: false,
					navigation: {
						nextEl: navNext,
						prevEl: navPrev
					},
					on: {
						slideChangeTransitionStart: function() {
							var currentElement = jQuery(this.el);
							var lastBullet = currentElement.find(".swiper-pagination-bullet:last");
							if (this.slides.length - (this.loopedSlides + 1) === this.activeIndex) {
								lastBullet.addClass("js_prefix-disable-bullate");
							} else {
								lastBullet.removeClass("js_prefix-disable-bullate");
							}
							if (jQuery(window).width() > 1199) {
								var innerTranslate = -(160 + swSpace[this.currentBreakpoint]) * (this.activeIndex);
								currentElement.find(".swiper-wrapper").css({
									"transform": "translate3d(" + innerTranslate + "px, 0, 0)"
								});
								currentElement.find('.swiper-slide:not(.swiper-slide-active)').css({
									width: "160px"
								});
								currentElement.find('.swiper-slide.swiper-slide-active').css({
									width: "476px"
								});
							}
						},
						resize: function() {
							var currentElement = jQuery(this.el);
							if (jQuery(window).width() > 1199) {
								if (currentElement.data("loop")) {
									var innerTranslate = -(160 + swSpace[this.currentBreakpoint]) * this.loopedSlides;
									currentElement.find(".swiper-wrapper").css({
										"transform": "translate3d(" + innerTranslate + "px, 0, 0)"
									});
								}
								currentElement.find('.swiper-slide:not(.swiper-slide-active)').css({
									width: "160px"
								});
								currentElement.find('.swiper-slide.swiper-slide-active').css({
									width: "476px"
								});
							}
						},
						init: function() {
							var currentElement = jQuery(this.el);
							currentElement.find('.swiper-slide').css({
								'max-width': 'auto'
							});
						}
					},
					pagination: (slider.data('pagination')) ? iqonicPagination : "",
					breakpoints: breakpoint,
				};
				var swiper = new Swiper(slider[0], sw_config);
			});
			jQuery(document).trigger('after_slider_init');
		}
	});
</script>

<script>
  const slides = document.getElementById('slidess');
const slider = document.getElementById('sliderr');
let index = 0;
let interval;

// Clone first slide and append it to the end
const firstClone = slidess.children[0].cloneNode(true);
slides.appendChild(firstClone);
const totalSlides = slidess.children.length;

function startSlider() {
  interval = setInterval(() => {
    index++;
    updateSlidePosition();

    // Reset to first slide (visually) after clone
    if (index === totalSlides - 1) {
      setTimeout(() => {
        slidess.style.transition = 'none';
        index = 0;
        updateSlidePosition();
        // Restore transition
        setTimeout(() => {
          slidess.style.transition = 'transform 0.5s ease-in-out';
        }, 50);
      }, 500); // Match slide transition duration
    }
  }, 3000);
}

function updateSlidePosition() {
  slidess.style.transform = `translateX(-${index * 100}%)`;
}

// Hover to pause
sliderr.addEventListener('mouseenter', () => clearInterval(interval));
sliderr.addEventListener('mouseleave', startSlider);

// Initialize slider
slidess.style.transition = 'transform 0.5s ease-in-out';
startSlider();

</script>


<script>
	var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = "";
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName("typewrite");
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute("data-type");
    var period = elements[i].getAttribute("data-period");
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #d29c49}";
  document.body.appendChild(css);
};

</script>
<script>
	$(document).ready(function () {
		$('.shop_box').on('click', function () {
			const shopId = $(this).data('id');
			$('#shopModalBody').html('<div class="text-center">Loading...</div>');
			var baseURL = "{{url('/')}}";

			$.ajax({
				url: `${baseURL}/shop-details-view/${shopId}`,
				method: 'GET',
				success: function (html) {
					$('#shopModalBody').html(html);
				},
				error: function () {
					$('#shopModalBody').html('<div class="text-danger text-center">Failed to load shop details.</div>');
				}
			});
		});
	});
</script>


<script>
	jQuery(document).on('click', '.shop-whishlist', function(e) {
		e.preventDefault();

		const button = $(this);
		const shopId = button.data('id');
		const baseURL = "{{ url('/') }}";

		$.ajax({
			url: `${baseURL}/shop/wishlist/toggle`,
			method: 'POST',
			data: {
				_token: '{{ csrf_token() }}',
				shop_id: shopId
			},
			success: function(response) {
				if (response.status === 'added') {
					button.find('svg').attr('fill', 'currentColor');
					showMessage(response.message);
				} else if (response.status === 'removed') {
					button.find('svg').attr('fill', 'none');
					showMessage(response.message);
				} else {
					console.warn('Unexpected response:', response);
				}
			},
			error: function(xhr) {
				console.error('Wishlist update failed:', xhr.responseText);
				let msg = 'Something went wrong. Please login or try again.';
				try {
					const json = JSON.parse(xhr.responseText);
					if (json.message) {
						msg = json.message;
					}
				} catch (e) {
					console.warn('Error parsing JSON response.');
				}
				errorMessage(msg);
			}
		});
	});
</script>

@endsection