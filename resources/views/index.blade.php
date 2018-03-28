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

<!-- <style>
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #ddd}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style> -->

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

                            <div class="blog-image"><img src="{{ $first_post->featured }}" alt="{{$first_post->title}}"></div>

                            <a class="avatar" href="#"><img src="{{ asset('app/images/icons8-team-355979.jpg') }}" alt="Profile Image"></a>

                            <div class="blog-info">

                                <h4 class="title"><a href="{{route('post.single', ['slug' => $first_post->slug])}}"><b>{{$first_post->title}}</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-calendar"></i>{{$first_post->created_at->diffForHumans()}}</a></li>
                                    <li><a href="#"><i class="ion-pricetag"></i>{{$first_post->category->name}}</a></li>
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

                            <div class="blog-image"><img src="{{ $second_post->featured }}" alt="{{$second_post->title}}"></div>

                            <a class="avatar" href="#"><img src="{{ asset('app/images/icons8-team-355979.jpg') }}" alt="Profile Image"></a>

                            <div class="blog-info">

                                <h4 class="title"><a href="{{route('post.single', ['slug' => $second_post->slug])}}"><b>{{$second_post->title}}</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-calendar"></i>{{$second_post->created_at->toFormattedDateString()}}</a></li>
                                    <li><a href="#"><i class="ion-pricetag"></i>{{$second_post->category->name}}</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ $third_post->featured }}" alt="{{$third_post->title}}"></div>

                            <a class="avatar" href="#"><img src="{{ asset('app/images/icons8-team-355979.jpg') }}" alt="Profile Image"></a>

                            <div class="blog-info">
                                <h4 class="title"><a href="{{route('post.single', ['slug' => $third_post->slug])}}"><b>{{$third_post->title}}</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-calendar"></i>{{$third_post->created_at->toFormattedDateString()}}</a></li>
                                    <li><a href="#"><i class="ion-pricetag"></i>{{$third_post->category->name}}</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>
                            </div><!-- blog-info -->

                        </div><!-- single-post -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ asset('app/images/pexels-photo-370474.jpeg') }}" alt="Blog Image"></div>

                            <a class="avatar" href="#"><img src="{{ asset('app/images/averie-woodard-319832.jpg') }}" alt="Profile Image"></a>

                            <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                Concepts in Physics?</b></a></h4>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-8 col-md-12">
                    <div class="card h-100">
                        <div class="single-post post-style-2">

                            <div class="blog-image"><img src="{{ asset('app/images/brooke-lark-194251.jpg') }}" alt="Blog Image"></div>

                            <div class="blog-info">

                                <h6 class="pre-title"><a href="#"><b>HEALTH</b></a></h6>

                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                    Concepts in Physics?</b></a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                                <div class="avatar-area">
                                    <a class="avatar" href="#"><img src="{{ asset('app/images/icons8-team-355979.jpg') }}" alt="Profile Image"></a>
                                    <div class="right-area">
                                        <a class="name" href="#"><b>Lora Plamer</b></a>
                                        <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                                    </div>
                                </div>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-right -->

                        </div><!-- single-post extra-blog -->

                    </div><!-- card -->
                </div><!-- col-lg-8 col-md-12 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ asset('app/images/dmitri-popov-326976.jpg') }}" alt="Blog Image"></div>

                            <a class="avatar" href="#"><img src="{{ asset('app/images/averie-woodard-319832.jpg') }}" alt="Profile Image"></a>

                            <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                Concepts in Physics?</b></a></h4>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">

                        <div class="single-post post-style-2 post-style-3">

                            <div class="blog-info">

                                <h6 class="pre-title"><a href="#"><b>HEALTH</b></a></h6>

                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                    Concepts in Physics?</b></a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                                <div class="avatar-area">
                                    <a class="avatar" href="#"><img src="{{ asset('app/images/icons8-team-355979.jpg') }}" alt="Profile Image"></a>
                                    <div class="right-area">
                                        <a class="name" href="#"><b>Lora Plamer</b></a>
                                        <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                                    </div>
                                </div>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-right -->

                        </div><!-- single-post extra-blog -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ asset('app/images/ben-o-sullivan-382817.jpg') }}" alt="Blog Image"></div>

                            <a class="avatar" href="#"><img src="{{ asset('app/images/icons8-team-355979.jpg') }}" alt="Profile Image"></a>

                            <div class="blog-info">
                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                    Concepts in Physics?</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>
                            </div><!-- blog-info -->

                        </div><!-- single-post -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">

                        <div class="single-post post-style-4">

                            <div class="display-table">
                                <h4 class="title display-table-cell"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                    Concepts in Physics?</b></a></h4>
                            </div>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->

                        <div class="single-post">

                            <div class="display-table">
                                <h4 class="title display-table-cell"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                    Concepts in Physics?</b></a></h4>
                            </div>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">

                        <div class="single-post post-style-4">

                            <div class="display-table">
                                <h4 class="title display-table-cell"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                    Concepts in Physics?</b></a></h4>
                            </div>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->

                        <div class="single-post">

                            <div class="display-table">
                                <h4 class="title display-table-cell"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                    Concepts in Physics?</b></a></h4>
                            </div>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-8 col-md-12">
                    <div class="card h-100">
                        <div class="single-post post-style-2">

                            <div class="blog-image"><img src="{{ asset('app/images/icons8-team-355990.jpg') }}" alt="Blog Image"></div>

                            <div class="blog-info">

                                <h6 class="pre-title"><a href="#"><b>HEALTH</b></a></h6>

                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                    Concepts in Physics?</b></a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                                <div class="avatar-area">
                                    <a class="avatar" href="#"><img src="{{ asset('app/images/icons8-team-355979.jpg') }}" alt="Profile Image"></a>
                                    <div class="right-area">
                                        <a class="name" href="#"><b>Lora Plamer</b></a>
                                        <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                                    </div>
                                </div>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-right -->

                        </div><!-- single-post extra-blog -->

                    </div><!-- card -->
                </div><!-- col-lg-8 col-md-12 -->

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
