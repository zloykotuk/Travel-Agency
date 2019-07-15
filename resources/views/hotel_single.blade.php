@extends('layout.app')

@section('title', 'Hotel')

@section('url')
  url({{URL::asset('images/bg_2.jpg')}})
@endsection

@section('container')
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
  <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Hotel</span></p>
    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
  </div>
</div>
@endsection

@section('content')
<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 sidebar">
        <div class="sidebar-wrap bg-light ftco-animate">
          <h3 class="heading mb-4">Find City</h3>
          <form action="#">
            <div class="fields">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Destination, City">
              </div>
              <div class="form-group">
                <div class="select-wrap one-third">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control" placeholder="Keyword search">
                    <option value="">Select Location</option>
                    <option value="">San Francisco USA</option>
                    <option value="">Berlin Germany</option>
                    <option value="">Lodon United Kingdom</option>
                    <option value="">Paris Italy</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
              </div>
              <div class="form-group">
                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
              </div>
              <div class="form-group">
                <div class="range-slider">
                  <span>
                    <input type="number" value="25000" min="0" max="120000"/>	-
                    <input type="number" value="50000" min="0" max="120000"/>
                  </span>
                  <input value="1000" min="0" max="120000" step="500" type="range"/>
                  <input value="50000" min="0" max="120000" step="500" type="range"/>
                  </svg>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
              </div>
            </div>
          </form>
        </div>
        <div class="sidebar-wrap bg-light ftco-animate">
          <h3 class="heading mb-4">Star Rating</h3>
          <form method="post" class="star-rating">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">
                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
              </label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">
                 <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
              </label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">
                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
             </label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">
                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
              </label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">
                <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
              </label>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="single-slider owl-carousel">
              @foreach ($hotel->slider_image as $image)
                  <div class="item">
                    <div class="hotel-img" style="background-image: url({{URL::asset($image->url)}});"></div>
                  </div>
              @endforeach
            </div>
          </div>
          <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
            <span>Our Best hotels &amp; Rooms</span>
            <h2>{{$hotel->name}}</h2>
            <p class="rate mb-5">
              <span class="loc"><a href="#"><i class="icon-map"></i> {{$hotel->address}}</a></span>
              <span class="star">
                @for ($i = 0; $i < $hotel->rating; $i++)
                    <i class="icon-star"></i>
                @endfor
                @for ($i = 0; $i < (5 - $hotel->rating); $i++)
                    <i class="icon-star-o"></i>
                @endfor
              {{$hotel->rating}} Rating</span>
            </p>
            <p>{{$hotel->info}}</p>
            <div class="d-md-flex mt-5 mb-5">
              <ul>
                <li>Безкоштовні послуги:</li>
                @foreach ($hotel->free_services as $free_services)
                    <li>{{ $free_services->name_services->name}}</li>
                @endforeach

              </ul>
              <ul class="ml-md-5">
                <li>Послуги за які необхідно доплатити:</li>
                @foreach ($hotel->paid_services as $paid_services)
                    <li>{{ $paid_services->name_services->name}}</li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
            <h4 class="mb-4">Take A Tour</h4>
            <div class="block-16">
              <figure>
                <img src="{{URL::asset($hotel->placeholder_video_url)}}" alt="Image placeholder" class="img-fluid">
                <a href="{{$hotel->video_url}}" class="play-button popup-vimeo"><span class="icon-play"></span></a>
              </figure>
            </div>
          </div>
          <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
            <h4 class="mb-4">Our Rooms</h4>
            <div class="row">
          @foreach ($hotel->rooms as $room)
          <div class="col-md-4">
            <div class="destination">
              <a href="hotel-single.html" class="img img-2" style="background-image: url({{URL::asset($room->url)}});"></a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="hotel-single.html">{{$room->name}}</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>{{$room->rating}}</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price per-price">{{$room->price}}<br><small>/night</small></span>
                  </div>
                </div>
                <p>{{$room->info}}</p>
                <hr>
                <p class="bottom-area d-flex">
                  <span class="ml-auto"><a href="#">Book Now</a></span>
                </p>
              </div>
            </div>
          </div>
          @endforeach
          <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
            <h4 class="mb-5">Check Availability &amp; Booking</h4>
            <div class="fields">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control" placeholder="Guest">
                        <option value="0">Guest</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control" placeholder="Children">
                        <option value="0">Children</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="submit" value="Check Availability" class="btn btn-primary py-3">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
            <h4 class="mb-4">Review &amp; Ratings</h4>
            <div class="row">
              <div class="col-md-6">
                <form method="post" class="star-rating">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                       <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
                   </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                    </label>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
            <h4 class="mb-4">Related Hotels</h4>
            <div class="row">
              <div class="col-md-4">
                <div class="destination">
                  <a href="hotel-single.html" class="img img-2" style="background-image: url(images/hotel-1.jpg);"></a>
                  <div class="text p-3">
                    <div class="d-flex">
                      <div class="one">
                        <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                        <p class="rate">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star-o"></i>
                          <span>8 Rating</span>
                        </p>
                      </div>
                      <div class="two">
                        <span class="price per-price">$40<br><small>/night</small></span>
                      </div>
                    </div>
                    <p>Far far away, behind the word mountains, far from the countries</p>
                    <hr>
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Miami, Fl</span>
                      <span class="ml-auto"><a href="#">Book Now</a></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="destination">
                  <a href="hotel-single.html" class="img img-2" style="background-image: url(images/hotel-2.jpg);"></a>
                  <div class="text p-3">
                    <div class="d-flex">
                      <div class="one">
                        <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                        <p class="rate">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star-o"></i>
                          <span>8 Rating</span>
                        </p>
                      </div>
                      <div class="two">
                        <span class="price per-price">$40<br><small>/night</small></span>
                      </div>
                    </div>
                    <p>Far far away, behind the word mountains, far from the countries</p>
                    <hr>
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Miami, Fl</span>
                      <span class="ml-auto"><a href="#">Book Now</a></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="destination">
                  <a href="hotel-single.html" class="img img-2" style="background-image: url(images/hotel-3.jpg);"></a>
                  <div class="text p-3">
                    <div class="d-flex">
                      <div class="one">
                        <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                        <p class="rate">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star-o"></i>
                          <span>8 Rating</span>
                        </p>
                      </div>
                      <div class="two">
                        <span class="price per-price">$40<br><small>/night</small></span>
                      </div>
                    </div>
                    <p>Far far away, behind the word mountains, far from the countries</p>
                    <hr>
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Miami, Fl</span>
                      <span class="ml-auto"><a href="#">Book Now</a></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- .col-md-8 -->
    </div>
  </div>
</section>
@endsection
