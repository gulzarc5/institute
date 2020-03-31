
            <header class="header-area">
                <div class="header-top bg-img" style="background-image:url({{asset('web/img/icon-img/header-shape.png')}});">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                                <div class="header-contact">
                                    <ul>
                                        <li><i class="fa fa-phone"></i>  +91 9435101808</li>
                                        <li><i class="fa fa-envelope-o"></i><a href="#">rgtmhkd@gmail.com.</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                                <div class="login-register">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="youtube" href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom sticky-bar clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-4">
                                <div class="logo" style="margin-top: 5px">
                                    <a href="{{route('web.index')}}">
                                        <img alt="error" src="{{asset('web/img/logo/logo.png')}}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-8">
                                <div class="menu-cart-wrap">
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="{{route('web.index')}}"> HOME </a></li>
                                                <li><a href="{{route('web.about.about')}}"> ABOUT  </a></li>    
                                                <li><a href="{{route('web.courses.courses')}}"> Courses </a></li>
                                                <li><a href="{{route('web.result.result')}}">Result</a></li>
                                                <li><a href="{{route('web.gallery.gallery')}}">Gallery</a></li>
                                                <li><a href="{{route('web.contact')}}"> Contact </a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="{{route('web.index')}}"> HOME </a></li>
                                        <li><a href="{{route('web.about.about')}}"> ABOUT  </a></li>    
                                        <li><a href="{{route('web.courses.courses')}}"> Courses </a></li>
                                        <li><a href="{{route('web.result.result')}}">Result</a></li>
                                        <li><a href="{{route('web.gallery.gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('web.contact')}}"> Contact </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>