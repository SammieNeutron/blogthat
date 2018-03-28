<footer>

        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                        <a class="logo" href="#"><img src="{{ asset('app/images/logo.png') }}" alt="Logo Image"></a>
                        <p class="copyright">Blogthat @ 2018. All rights reserved.</p>
                        <ul class="icons">
                            <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                        </ul>

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                        <div class="footer-section">
                        <h4 class="title"><b>CATAGORIES</b></h4>
                        <ul>

                            @foreach($categories as $category)

                                <li>
                                    <a href="#">{{$category->name}}</a>
                                </li>

                                <!-- @if($category->id > 3)
                                    <br>
                                @endif
                                 -->
                            @endforeach
                            <!-- <li><a href="#">BEAUTY</a></li>
                            <li><a href="#">HEALTH</a></li>
                            <li><a href="#">MUSIC</a></li> -->
                        </ul>
                        <ul>
                            <!-- <li><a href="#">SPORT</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">TRAVEL</a></li> -->
                        </ul>
                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                        <h4 class="title"><b>SUBSCRIBE</b></h4>
                        <div class="input-area">
                            <form>
                                <input class="email-input" type="text" placeholder="Enter your email">
                                <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
                            </form>
                        </div>

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

            </div><!-- row -->

            <div class="row">
            	<div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                        <h4 class="title"><b>Contact Phone</b></h4>
                        
                        <p style="font-size: 10px; font-family: ebrima" class="copyright"><i class="icon ion-ios-telephone-outline">&nbsp;{{$settings->contact_number}}</i></p>
                    </div><!-- footer-section -->
                </div>
            

	            <div class="col-lg-4 col-md-6">
	                    <div class="footer-section">

	                        <h4 class="title"><b>Contact Email</b></h4>
	                        
	                        <p style="font-size: 10px; font-family: ebrima" class="copyright"><i class="icon ion-ios-email-outline">&nbsp;{{$settings->contact_email}}</i></p>

	                    </div><!-- footer-section -->
	                
	            </div>

	            <div class="col-lg-4 col-md-6">
	                    <div class="footer-section">

	                        <h4 class="title"><b>Contact Address</b></h4>
	                        
	                        <p style="font-size: 10px; font-family: ebrima; text-decoration: none; " class="copyright"><i class="icon ion-ios-location-outline">&nbsp;{{$settings->address}}</i></p>
	                    </div><!-- footer-section -->
	                
            	</div>
            </div>
        </div><!-- container -->
    </footer>