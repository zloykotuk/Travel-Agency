@extends('layout.app')

@section('title', 'Page Title')


@section('url', 'url(\'images/bg_1.jpg\')')

@section('container')
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
  <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore <br></strong> your amazing city</h1>
    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
    <div class="block-17 my-4">
      <form action="" method="post" class="d-block d-flex">
        <div class="fields d-block d-flex">
          <div class="textfield-search one-third">
            <input type="text" class="form-control" placeholder="Ex: food, service, hotel">
          </div>
          <div class="select-wrap one-third">
            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
            <select name="" id="" class="form-control" placeholder="Keyword search">
              <option value="">Where</option>
              <option value="">San Francisco USA</option>
              <option value="">Berlin Germany</option>
              <option value="">Lodon United Kingdom</option>
              <option value="">Paris Italy</option>
            </select>
          </div>
        </div>
        <input type="submit" class="search-submit btn btn-primary" value="Search">
      </form>
    </div>
    <p>Or browse the highlights</p>
    <p class="browse d-md-flex">
      <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-fork"></i>Restaurant</a></span>
      <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-hotel"></i>Hotel</a></span>
      <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-meeting-point"></i>Places</a></span>
      <span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Shopping</a></span>
    </p>
  </div>
</div>
@endsection

@section('content')
<section class="ftco-section services-section bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">Best Price Guarantee</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">Travellers Love Us</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">Best Travel Agent</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">Our Dedicated Support</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-destination">
  <div class="container">
    <div class="row justify-content-start mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <span class="subheading">Featured</span>
        <h2 class="mb-4"><strong>Featured</strong> Destination</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="destination-slider owl-carousel ftco-animate">
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Paris, Italy</a></h3>
                <span class="listing">15 Listing</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">San Francisco, USA</a></h3>
                <span class="listing">20 Listing</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Lodon, UK</a></h3>
                <span class="listing">10 Listing</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Lion, Singapore</a></h3>
                <span class="listing">3 Listing</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Australia</a></h3>
                <span class="listing">3 Listing</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="destination">
              <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-6.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Paris, Italy</a></h3>
                <span class="listing">3 Listing</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-start mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <span class="subheading">Special Offers</span>
        <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="destination">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div class="one">
                <h3><a href="#">Paris, Italy</a></h3>
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
                <span class="price">$200</span>
              </div>
            </div>
            <p>Far far away, behind the word mountains, far from the countries</p>
            <p class="days"><span>2 days 3 nights</span></p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="icon-map-o"></i> San Franciso, CA</span>
              <span class="ml-auto"><a href="#">Discover</a></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="destination">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div class="one">
                <h3><a href="#">Paris, Italy</a></h3>
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
                <span class="price">$200</span>
              </div>
            </div>
            <p>Far far away, behind the word mountains, far from the countries</p>
            <p class="days"><span>2 days 3 nights</span></p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="icon-map-o"></i> San Franciso, CA</span>
              <span class="ml-auto"><a href="#">Discover</a></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="destination">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div class="one">
                <h3><a href="#">Paris, Italy</a></h3>
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
                <span class="price">$200</span>
              </div>
            </div>
            <p>Far far away, behind the word mountains, far from the countries</p>
            <p class="days"><span>2 days 3 nights</span></p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="icon-map-o"></i> San Franciso, CA</span>
              <span class="ml-auto"><a href="#">Discover</a></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="destination">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div class="one">
                <h3><a href="#">Paris, Italy</a></h3>
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
                <span class="price">$200</span>
              </div>
            </div>
            <p>Far far away, behind the word mountains, far from the countries</p>
            <p class="days"><span>2 days 3 nights</span></p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="icon-map-o"></i> San Franciso, CA</span>
              <span class="ml-auto"><a href="#">Discover</a></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="destination">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div class="one">
                <h3><a href="#">Paris, Italy</a></h3>
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
                <span class="price">$200</span>
              </div>
            </div>
            <p>Far far away, behind the word mountains, far from the countries</p>
            <p class="days"><span>2 days 3 nights</span></p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="icon-map-o"></i> San Franciso, CA</span>
              <span class="ml-auto"><a href="#">Discover</a></span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
