@extends('layouts.site')

@section('content')
<style>
    .bradcam_bg_2 {
  background-image: url({{asset('files/'. $country->image)}});
}
</style>
      <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2" >
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>{{$country->name}}</h3>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Where you want to go?</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="{{ route('callback') }}" method="POST">
                            <div class="input_field">
                                <input type="text" placeholder="Телефон номер?" name="name">
                            </div>
                            <div class="input_field">
                                <input type="date" placeholder="Когда" name="date">
                            </div>
                            <div class="input_field">
                               <input type="text" name="place" placeholder="Куда">
                            </div>
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->


    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="filter_result_wrap">
                        <h3>Обратная связ</h3>
                        <form action="{{ route('callback') }}" method="POST">
                            @csrf
                        <div class="filter_bordered">
                            <div class="filter_inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Куда:</span>
                                                <input type="text" class="form-control" name="place" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                              </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Тел:</span>
                                                <input type="text" class="form-control" name="phone" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                              </div>
                                        </div>
                                    </div>
                                    
                                </div>


                            </div>

                            <div class="reset_btn">
                                <button class="boxed-btn4" type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            
                <div class="col-lg-8">
                    <div class="row">

                        @foreach ($tour as $item)
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{asset('files/'. $item->img)}}" alt="">
                                    <a href="/showTour/{{$item->id}}" class="prise">{{$item->price}}</a>
                                </div>
                                <div class="place_info">
                                    <a href="/showTour/{{$item->id}}"><h3>{{$item->title}}</h3></a>
                                  
                                    <div class="rating_days d-flex justify-content-between">
                                       
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="/showTour/{{$item->id}}">{{$item->day}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    
                    </div>
                 
                </div>
            </div>
        </div>
    </div>

        <!-- newletter_area_start  -->
        <div class="newletter_area overlay">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="newsletter_text">
                                    <h4>Subscribe Our Newsletter</h4>
                                    <p>Subscribe newsletter to get offers and about
                                        new places to discover.</p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="mail_form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-9 col-md-8">
                                            <div class="newsletter_field">
                                                <input type="email" placeholder="Your mail" >
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="newsletter_btn">
                                                <button class="boxed-btn4 " type="submit" >Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newletter_area_end  -->
    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Recent Trips</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/1.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/2.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/3.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection