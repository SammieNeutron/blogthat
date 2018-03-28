@extends('layouts.frontend')


@section('content')

	<div class="slider">

	</div><!-- slider -->

	<section class="post-area">
		<div class="container">

			<div class="row">

				<div class="col-lg-1 col-md-0"></div>
				<div class="col-lg-10 col-md-12">

					<div class="main-post">

						<div class="post-top-area">

							<h5 class="pre-title"><strong>{{$post->category->name}}</strong></h5>

							<h3 class="title"><a href="#"><b>{{$post->title}}</b></a></h3>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="{{asset('app/images/avatar-1-120x120.jpg')}}" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

							</div><!-- post-info -->

							<div class="post-image"><img src="{{$post->featured}}" alt="Blog Image"></div>

							<p class="para">{!! $post->content !!}</p>

						</div><!-- post-top-area -->

						<div class="post-bottom-area">

							<ul class="tags">
								@foreach($post->tags as $tag)
									<li><a href="#">{{$tag->tag}}</a></li>
								@endforeach
							</ul>

							<div class="post-icons-area">
								<ul class="post-icons">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>

								<ul class="icons">
									<li>SHARE : </li>
									<li><a href="#"><i class="ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
								</ul>
							</div>

							<div class="post-footer post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="{{asset('app/images/avatar-1-120x120.jpg')}}" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

							</div><!-- post-info -->

						</div><!-- post-bottom-area -->

					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->

	<div class="row nav-button">
		<div class="col-lg-2 col-md-0"></div>
		<div class="col-lg-8">
			<br>
			@if($prev)
			<a href="{{route('post.single', ['slug' => $prev->slug])}}" class="submit-btn" style="float: left;"><span><i class="ion-arrow-left-c"></i></span>&nbsp;Previous post</a>
			@endif

			@if($next)
			<a href="{{route('post.single', ['slug' => $next->slug])}}" class="submit-btn" style="float: right;">Next post&nbsp;<span><i class="ion-arrow-right-c"></i></span></a>
			@endif
		</div>
	</div>

	<section class="comment-section center-text">
		<div class="container">
			<br>
			<h4><b>Post comment</b></h4>
			<div class="row">

				<div class="col-lg-2 col-md-0"></div>

				<div class="col-lg-8 col-md-12">
					<div class="comment-form">
						@include('includes.disqus')
					</div><!-- comment-form -->
				</div>

			</div><!-- row -->

			<br>
			<h4><b>All Blog tags</b></h4>
			<div class="comment-form main-post">
				<ul class="tags">
					@foreach($post->tags as $tag)
						<li><a href="#">{{$tag->tag}}</a></li>
					@endforeach
				</ul>
			</div>
		</div><!-- container -->
	</section>

@endsection