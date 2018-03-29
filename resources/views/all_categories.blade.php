@extends('layouts.frontend')


@section('content')

	<div class="main-slider">
		<div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
			data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
			data-swiper-breakpoints="true" data-swiper-loop="true" >
			<div class="swiper-wrapper">


				@foreach($categories as $category)
				<div class="swiper-slide">
					<a class="slider-category" href="{{route('category.single', ['id' => $category->id])}}">
						<div class="blog-image"><img src="{{ asset('app/images/category-1-400x250.jpg') }}" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>{{$category->name}}</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->
				@endforeach

			</div><!-- swiper-wrapper -->

		</div><!-- swiper-container -->

	</div><!-- slider -->
			
	<section class="blog-area section">
		<div class="container">
			<div class="row">
				@foreach($categories as $category)
				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post">

							<div class="display-table">
								<h4 class="title display-table-cell"><a href="{{route('category.single', ['id' => $category->id])}}"><b>{{$category->name}}</b></a></h4>
							</div>

							<ul class="post-footer">
								<li><a href="#"><i class="ion-heart"></i>57</a></li>
								<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
								<li><a href="#"><i class="ion-eye"></i>138</a></li>
							</ul>

						</div><!-- single-post -->
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
			

@endsection