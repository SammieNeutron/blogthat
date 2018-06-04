<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>{{$settings->site_name}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="{{ asset('app/common-css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('app/common-css/ionicons.css') }}" rel="stylesheet">


    <link href="{{ asset('app/layout-1/css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('app/layout-1/css/responsive.css') }}" rel="stylesheet">

</head>
<body >

    @include('includes.header')

    <div class="slider"></div><!-- slider -->

    <section class="blog-area section">
        <div class="container">

            <div class="row">

                <div class="col-lg-2 col-md-2">
                    
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ $first_post->featured_url }}" alt="{{$first_post->title}}"></div>



                            <a class="avatar" href="#"><img src="{{ asset($first_post->user->profile->avatar_url) }}" alt="{{ $first_post->user->name }}"></a>

                            <div class="blog-info">

                                <h4 class="title"><a href="{{route('post.single', ['slug' => $first_post->slug])}}"><b>{{$first_post->title}}</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-calendar"></i>{{$first_post->created_at->toFormattedDateString()}}</a></li>
                                    <li><a href="{{route('category.single', ['id' => $first_post->category->id])}}"><i class="ion-pricetag"></i>{{$first_post->category->name}}</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-2 col-md-2">
                    
                </div>
            </div>

            <br>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ $second_post->featured_url }}" alt="{{$second_post->title}}"></div>

                           <a class="avatar" href="#"><img src="{{ asset($second_post->user->profile->avatar_url) }}" alt="{{ $second_post->user->name }}"></a>

                            <div class="blog-info">

                                <h4 class="title"><a href="{{route('post.single', ['slug' => $second_post->slug])}}"><b>{{$second_post->title}}</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-calendar"></i>{{$second_post->created_at->toFormattedDateString()}}</a></li>
                                    <li><a href="{{route('category.single', ['id' => $second_post->category->id])}}"><i class="ion-pricetag"></i>{{$second_post->category->name}}</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>138</a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ $third_post->featured_url }}" alt="{{$third_post->title}}"></div>

                          <a class="avatar" href="#"><img src="{{ asset($third_post->user->profile->avatar_url) }}" alt="{{ $third_post->user->name }}"></a>

                            <div class="blog-info">
                                <h4 class="title"><a href="{{route('post.single', ['slug' => $third_post->slug])}}"><b>{{$third_post->title}}</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-calendar"></i>{{$third_post->created_at->toFormattedDateString()}}</a></li>
                                    <li><a href="{{route('category.single', ['id' => $third_post->category->id])}}"><i class="ion-pricetag"></i>{{$third_post->category->name}}</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>138</a></li>
                                </ul>
                            </div><!-- blog-info -->

                        </div><!-- single-post -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ $fourth_post->featured_url }}" alt="{{$fourth_post->title}}"></div>

                          <a class="avatar" href="#"><img src="{{ asset($fourth_post->user->profile->avatar_url) }}" alt="{{ $fourth_post->user->name }}"></a>

                            <h4 class="title"><a href="{{ route('post.single', ['slug' => $fourth_post->slug]) }}"><b>{{$fourth_post->title}}</b></a></h4>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-calendar"></i>{{$fourth_post->created_at->toFormattedDateString()}}</a></li>
                                    <li><a href="{{route('category.single', ['id' => $fourth_post->category->id])}}"><i class="ion-pricetag"></i>{{$fourth_post->category->name}}</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->


                <!-- First category goes here -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 style="font-family: ebrima">{{$first_category->name}}</h3>
                        </div>
                    </div>
                </div>

                @foreach($first_category->posts()->orderBy('created_at', 'desc')->take(3)->get() as $post)

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ $post->featured_url }}" alt="{{$post->title}}"></div>

                            <a class="avatar" href="#"><img src="{{ asset($post->user->profile->avatar_url) }}" alt="{{ $post->user->name }}"></a>

                            <div class="blog-info">

                                <h4 class="title"><a href="{{route('post.single', ['slug' => $post->slug])}}"><b>{{$post->title}}</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-calendar"></i>{{$post->created_at->toFormattedDateString()}}</a></li>
                                    <li><a href="{{route('category.single', ['id' => $post->category->id])}}"><i class="ion-pricetag"></i>{{$post->category->name}}</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                @endforeach




                <!-- 2nd category in descending order in db goes here -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 style="font-family: Ebrima">{{$second_category->name}}</h3>
                        </div>
                    </div>
                </div>

                @foreach($second_category->posts()->orderBy('created_at', 'desc')->take(3)->get() as $post)

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ $post->featured_url }}" alt="{{$post->title}}"></div>

                           
                            <a class="avatar" href="#"><img src="{{ asset($post->user->profile->avatar_url) }}" alt="{{ $post->user->name }}"></a>

                            <div class="blog-info">

                                <h4 class="title"><a href="{{route('post.single', ['slug' => $post->slug])}}"><b>{{$post->title}}</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-calendar"></i>{{$post->created_at->toFormattedDateString()}}</a></li>
                                    <li><a href="{{route('category.single', ['id' => $post->category->id])}}"><i class="ion-pricetag"></i>{{$post->category->name}}</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                @endforeach


            </div><!-- row -->

            <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

        </div><!-- container -->
    </section><!-- section -->


    @include('includes.footer')


    <!-- SCIPTS -->

    <script src="{{ asset('app/common-js/jquery-3.1.1.min.js') }}"></script>

    <script src="{{ asset('app/common-js/tether.min.js') }}"></script>

    <script src="{{ asset('app/common-js/bootstrap.js') }}"></script>

    <script src="{{ asset('app/common-js/scripts.js') }}"></script>

</body>
</html>
