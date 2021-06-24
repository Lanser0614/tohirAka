<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="/">Главная</a></li>
                                        <li><a href="/about">O нас</a></li>
                                        <li><a class="" href="#">Тури<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">

                                                @foreach ($countries as $item)
                                                <li><a href="/destination/{{$item->id}}">{{ $item->name }}</a></li>
                                                @endforeach

                                        </ul>
                                        </li>
                                       
                                      
                                        <li><a href="/contact">Наши контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">
                                <div class="number">
                                    @foreach ($detail as $item)
                                    <p> <i class="fa fa-phone"></i> {{ $item->phone }}</p>
                                    @endforeach
                                </div>
                                <div class="social_links d-none d-xl-block">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-telegram"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                     
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>