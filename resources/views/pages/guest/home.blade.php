@extends('pages.layouts.main')
@section('title', 'Home Page')
@section('content')



<section class="banner">
<div class="slider">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide" style="background-image: url({{asset('client/assets/images/slider/slider4.jpg')}})">
<div class="swiper-content">
<div class="slider-logo">
<img src="{{asset('client/assets/images/icons/bed-logo.png')}}" alt="Image" />
</div>
<h3 data-animation="animated fadeInUp">Room Availability Checker & Booking</h3>
<h1 data-animation="animated fadeInUp">Book Early <span>Save</span>More</h1>
<a href="#" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10">Explore Our Rooms</a>
</div>
</div>
<div class="swiper-slide" style="background-image: url({{asset('client/assets/images/slider/slider2.jpg')}})">
<div class="swiper-content">
<div class="slider-logo">
<img src="{{asset('client/assets/images/icons/bed-logo.png')}}" alt="Image" />
</div>
<h3 data-animation="animated fadeInUp">The lap of Luxury</h3>
<h1 data-animation="animated fadeInUp">Quality <span>Holiday</span> With Us</h1>
<a href="#" data-animation="animated fadeInUp" class="slider-btn btn-or">Book A Room Now</a>
</div>
</div>
<div class="swiper-slide" style="background-image: url({{asset('client/assets/images/slider/slider3.jpg')}})">
<div class="swiper-content">
<div class="slider-logo">
<img src="i{{asset('client/assets/images/icons/bed-logo.png')}}" alt="Image" />
</div>
<h3 data-animation="animated fadeInUp">As We Like to Keep It That Way</h3>
<h1 data-animation="animated fadeInUp">A <span>Five Star</span> Hotel</h1>
<a href="#" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10">Explore Our Rooms</a>
<a href="#" data-animation="animated fadeInUp" class="slider-btn btn-wt">Book A Room Now</a>
</div>
</div>
</div>

<div class="swiper-pagination"></div>
</div>
<div class="overlay"></div>
</div>
<div class="banner-form form-style-1 form-style-3">
<div class="container">
<div class="form-content text-center">
<div class="table-item">
<label>Check In</label>
<div class="form-group">
<div class="date-range-inner-wrapper">
<input id="date-range2" class="form-control" value="Check In" />
<span class="input-group-addon">
<i class="fa fa-calendar" aria-hidden="true"></i>
</span>
</div>
</div>
</div>
<div class="table-item">
<label>Check Out</label>
<div class="form-group">
<div class="date-range-inner-wrapper">
<input id="date-range3" class="form-control" value="Check In" />
<span class="input-group-addon">
<i class="fa fa-calendar" aria-hidden="true"></i>
</span>
</div>
</div>
</div>
<div class="table-item">
<label>Guests</label>
<div class="form-group form-icon">
<select class="wide">
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
</select>
</div>
</div>
<div class="table-item">
<label>Nights</label>
<div class="form-group form-icon">
<select class="wide">
<option value="1">05</option>
<option value="2">06</option>
<option value="3">07</option>
<option value="4">08</option>
<option value="5">09</option>
</select>
</div>
</div>
<div class="table-item">
<div class="form-btn mar-top-35">
<a class="btn btn-orange">Check Availability</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="about-style-2">
<div class="container">
<div class="about-inner">
<div class="about-heading mar-bottom-40">
<h2 class="title">Comfort are <span>perfectly</span> combined here</h2>
<div class="description">
<p>
This charming private 19th century mansion, which originally belonged to the family, has been completely renovated with care &amp; passion while
respecting the spirit of place.
</p>
<p>Hotux Hotel surrounded herself by a team of French artisans to create a sophisticated place in a refined.</p>
</div>
</div>
<div class="about-img-box row">
<div class="col-lg-4 col-md-6">
<img src="images/about1.jpg" alt />
</div>
<div class="col-lg-4 col-md-6">
<img src="images/about3.jpg" alt />
</div>
<div class="col-lg-4 col-md-12">
<img src="images/about4.jpg" alt />
</div>
</div>
</div>
</div>
</section>


<section class="rooms rooms-style2">
<div class="container">
<div class="section-title">
<h2>Explore <span>Rooms</span></h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur
turpis
</p>
</div>
<div class="room-outer">
<div class="row">
<div class="col-lg-4 col-md-6 mar-bottom-30">
<div class="room-item">
<div class="room-image">
<img src="images/room-b1.jpg" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<div class="deal-rating mar-bottom-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4>Super Deluxe</h4>
<div class="price">$150<span>Per Night</span></div>
<div class="text">Lorem ipsum dolor sit amet constur adip isicing elit sed do eiusmtem por incid.</div>
</div>
<div class="room-services mar-top-20">
<ul>
<li><a href="#" class="btn btn-black">BOOK NOW</a></li>
<li><i class="fas fa-bed" aria-hidden="true"></i></li>
<li><i class="fas fa-wifi" aria-hidden="true"></i></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mar-bottom-30">
<div class="room-item">
<div class="room-image">
<img src="images/room-b2.jpg" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<div class="deal-rating mar-bottom-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4>Junior Suite</h4>
<div class="price">$100<span>Per Night</span></div>
<div class="text">Lorem ipsum dolor sit amet constur adip isicing elit sed do eiusmtem por incid.</div>
</div>
<div class="room-services mar-top-20">
<ul>
<li><a href="#" class="btn btn-black">BOOK NOW</a></li>
<li><i class="fas fa-bed" aria-hidden="true"></i></li>
<li><i class="fas fa-wifi" aria-hidden="true"></i></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mar-bottom-30">
<div class="room-item">
<div class="room-image">
<img src="images/room-b3.jpg" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<div class="deal-rating mar-bottom-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4>Executive Suite</h4>
<div class="price">$120<span>Per Night</span></div>
<div class="text">Lorem ipsum dolor sit amet constur adip isicing elit sed do eiusmtem por incid.</div>
</div>
<div class="room-services mar-top-20">
<ul>
<li><a href="#" class="btn btn-black">BOOK NOW</a></li>
<li><i class="fas fa-bed" aria-hidden="true"></i></li>
<li><i class="fas fa-wifi" aria-hidden="true"></i></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="room-item">
<div class="room-image">
<img src="images/room3.jpg" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<div class="deal-rating mar-bottom-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4>Royal Deluxe</h4>
<div class="price">$180<span>Per Night</span></div>
<div class="text">Lorem ipsum dolor sit amet constur adip isicing elit sed do eiusmtem por incid.</div>
</div>
<div class="room-services mar-top-20">
<ul>
<li><a href="#" class="btn btn-black">BOOK NOW</a></li>
<li><i class="fas fa-bed" aria-hidden="true"></i></li>
<li><i class="fas fa-wifi" aria-hidden="true"></i></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="room-item">
<div class="room-image">
<img src="images/room1.jpg" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<div class="deal-rating mar-bottom-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4>Standard Room</h4>
<div class="price">$220<span>Per Night</span></div>
<div class="text">Lorem ipsum dolor sit amet constur adip isicing elit sed do eiusmtem por incid.</div>
</div>
<div class="room-services mar-top-20">
<ul>
<li><a href="#" class="btn btn-black">BOOK NOW</a></li>
<li><i class="fas fa-bed" aria-hidden="true"></i></li>
<li><i class="fas fa-wifi" aria-hidden="true"></i></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="room-item">
<div class="room-image">
<img src="images/room2.jpg" alt="image" />
</div>
<div class="room-content">
<div class="room-title">
<div class="deal-rating mar-bottom-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<h4>Special Suite</h4>
<div class="price">$200<span>Per Night</span></div>
<div class="text">Lorem ipsum dolor sit amet constur adip isicing elit sed do eiusmtem por incid.</div>
</div>
<div class="room-services mar-top-20">
<ul>
<li><a href="#" class="btn btn-black">BOOK NOW</a></li>
<li><i class="fas fa-bed" aria-hidden="true"></i></li>
<li><i class="fas fa-wifi" aria-hidden="true"></i></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="call-to-action call-style-1">
<div class="container">
<div class="call-content text-center">
<h2 class="white mar-bottom-25">Get up to <span>20% off</span> on your next travel</h2>
<p>Choose the package you would like to offer to your clients andsend us an inquiry using the contact form.</p>
<a href="#" class="btn btn-orange mar-top-20">Get It Now <i class="fas fa-angle-double-right"></i></a>
</div>
<div class="best-services">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<div class="wrap-best text-center">
<div class="icon-best mar-bottom-20">
<i class="fas fa-bed" aria-hidden="true"></i>
</div>
<h5 class="white mar-0">Master Bedrooms</h5>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<div class="wrap-best text-center">
<div class="icon-best mar-bottom-20">
<i class="fas fa-swimmer" aria-hidden="true"></i>
</div>
<h5 class="white mar-0">Pool &amp; Spa</h5>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<div class="wrap-best text-center">
<div class="icon-best mar-bottom-20">
<i class="fas fa-wifi" aria-hidden="true"></i>
</div>
<h5 class="white mar-0">Wifi Coverage</h5>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<div class="wrap-best text-center">
<div class="icon-best mar-bottom-20">
<i class="fas fa-taxi" aria-hidden="true"></i>
</div>
<h5 class="white mar-0">Airport Taxi</h5>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="services service-style-1 service-style-2">
<div class="container-fluid">
<div class="section-title">
<h2 class="mar-0">Explore <span>Services</span></h2>
</div>
<div class="service-outer">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="service-item">
<div class="service-image">
<img src="images/feature1.jpg" alt="Image" />
</div>
<div class="service-content">
<h4 class="mar-0"><a href="service-detail.html" class="white">Gym & Exercises</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="service-item">
<div class="service-image">
<img src="images/feature2.jpg" alt="Image" />
</div>
<div class="service-content">
<h4 class="mar-0"><a href="service-detail.html" class="white">Beach Sight</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="service-item">
<div class="service-image">
<img src="images/feature5.jpg" alt="Image" />
</div>
<div class="service-content">
<h4 class="mar-0"><a href="service-detail.html" class="white">Massage</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="service-item">
<div class="service-image">
<img src="images/feature6.jpg" alt="Image" />
</div>
<div class="service-content">
<h4 class="mar-0"><a href="service-detail.html" class="white">Swimming Pool</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="service-item">
<div class="service-image">
<img src="images/feature7.jpg" alt="Image" />
</div>
<div class="service-content">
<h4 class="mar-0"><a href="service-detail.html" class="white">Restaurant</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="service-item">
<div class="service-image">
<img src="images/feature8.jpg" alt="Image" />
</div>
<div class="service-content">
<h4 class="mar-0"><a href="service-detail.html" class="white">Futurethon</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="service-item">
<div class="service-image">
<img src="images/feature5.jpg" alt="Image" />
</div>
<div class="service-content">
<h4 class="mar-0"><a href="service-detail.html" class="white">Massage</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="service-item">
<div class="service-image">
<img src="images/feature6.jpg" alt="Image" />
</div>
<div class="service-content">
<h4 class="mar-0"><a href="service-detail.html" class="white">Swimming Pool</a></h4>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="events pad-bottom-70">
<div class="container">
<div class="section-title">
<h2>Upcoming Events of <span>Hotux</span></h2>
<p class="mar-bottom-30">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur
turpis
</p>
</div>
<div class="events-main1">
<div class="row">
<div class="col-lg-4 col-md-12 mar-bottom-30">
<div class="news-item">
<div class="news-image">
<img src="images/news12.jpg" alt="image" />
<p class="dates white"><span class="white">16</span> DEC 2019</p>
</div>
<div class="news-content">
<h4>
<a href="events-detail.html">Wedding <span>Ceremony</span></a>
</h4>
<div class="meta mar-bottom-15">
<span class="time mar-right-10"> <i class="fas fa-clock"></i> 8:00 pm - 4:00 am</span>
<span class="location"> <i class="fas fa-map-marker"></i>PARIS, FRENCH</span>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
<a href="events-detail.html">READ MORE <i class="fas fa-angle-double-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mar-bottom-30">
<div class="news-item">
<div class="news-image">
<img src="images/news13.jpg" alt="image" />
<p class="dates white"><span class="white">21</span> DEC 2019</p>
</div>
<div class="news-content">
<h4>
<a href="events-detail.html"><span>New Year</span> Party</a>
</h4>
<div class="meta mar-bottom-15">
<span class="time mar-right-10"> <i class="fas fa-clock"></i> 8:00 pm - 4:00 am</span>
<span class="location"> <i class="fas fa-map-marker"></i>PARIS, FRENCH</span>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
<a href="events-detail.html">READ MORE <i class="fas fa-angle-double-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mar-bottom-30">
<div class="news-item">
<div class="news-image">
<img src="images/news14.jpg" alt="image" />
<p class="dates white"><span class="white">25</span> DEC 2019</p>
</div>
<div class="news-content">
<h4>
<a href="events-detail.html">Hotel <span>Autumn</span> 2020</a>
</h4>
<div class="meta mar-bottom-15">
<span class="time mar-right-10"> <i class="fas fa-clock"></i> 8:00 pm - 4:00 am</span>
<span class="location"> <i class="fas fa-map-marker"></i>PARIS, FRENCH</span>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
<a href="events-detail.html">READ MORE <i class="fas fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="content gallery">
<div class="section-title">
<h2>Beautiful View of <span>Hotux</span></h2>
<p class="mar-bottom-30">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur
turpis
</p>
</div>
<div class="container">
<div class="gal-3-col">
<div class="masonry">
<div class="brick">
<div class="gallery-item">
<div class="gallery-image">
<img src="images/gallery/gallery1.jpg" alt="image" />
</div>
<div class="gallery-content">
<ul>
<li>
<a href="images/gallery/gallery1.jpg" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-link"></i></a>
</li>
</ul>
</div>
</div>
</div>
<div class="brick">
<div class="gallery-item">
<div class="gallery-image">
<img src="images/gallery/gallery16.jpg" alt="image" />
</div>
<div class="gallery-content">
<ul>
<li>
<a href="images/gallery/gallery16.jpg" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-link"></i></a>
</li>
</ul>
</div>
</div>
</div>
<div class="brick">
<div class="gallery-item">
<div class="gallery-image">
<img src="images/gallery/gallery3.jpg" alt="image" />
</div>
<div class="gallery-content">
<ul>
<li>
<a href="images/gallery/gallery3.jpg" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-link"></i></a>
</li>
</ul>
</div>
</div>
</div>
<div class="brick">
<div class="gallery-item">
<div class="gallery-image">
<img src="images/gallery/gallery17.jpg" alt="image" />
</div>
<div class="gallery-content">
<ul>
<li>
<a href="images/gallery/gallery17.jpg" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-link"></i></a>
</li>
</ul>
</div>
</div>
</div>
<div class="brick">
<div class="gallery-item">
<div class="gallery-image">
<img src="images/gallery/gallery15.jpg" alt="image" />
</div>
<div class="gallery-content">
<ul>
<li>
<a href="images/gallery/gallery15.jpg" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-link"></i></a>
</li>
</ul>
</div>
</div>
</div>
<div class="brick">
<div class="gallery-item">
<div class="gallery-image">
<img src="images/gallery/gallery5.jpg" alt="image" />
</div>
<div class="gallery-content">
<ul>
<li>
<a href="images/gallery/gallery5.jpg" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-link"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="reviews reviews-style-1">
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-12">
<div class="section-title title-white mar-0">
<h4 class="white">What People Says</h4>
<h2>Happy Explore <span>Reviews</span></h2>
<p class="mar-bottom-30">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae
consectetur turpis
</p>
<a href="testimonial.html" class="btn btn-orange">View More</a>
</div>
</div>
<div class="col-lg-7 col-md-12">
<div class="review-slider1">
<div class="slider-item">
<div class="slider-image">
<img src="images/review1.jpg" alt="image" />
</div>
<div class="slider-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
<h4>Micheal Clordy</h4>
<span>Germany</span>
</div>
<div class="slider-quote">
<img src="images/icons/quote.png" alt="Image" />
</div>
</div>
<div class="slider-item">
<div class="slider-image">
<img src="images/review2.jpg" alt="image" />
</div>
<div class="slider-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
<h4>Ketty Perry</h4>
<span>Australia</span>
</div>
<div class="slider-quote">
<img src="images/icons/quote.png" alt="Image" />
</div>
</div>
<div class="slider-item">
<div class="slider-image">
<img src="images/review1.jpg" alt="image" />
</div>
<div class="slider-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
<h4>Micheal Clordy</h4>
<span>Germany</span>
</div>
<div class="slider-quote">
<img src="images/icons/quote.png" alt="Image" />
</div>
</div>
</div>
</div>
</div>
</div>
<div class="overlay"></div>
</section>


<section class="news news-style-1 pad-bottom-70">
<div class="container">
<div class="section-title">
<h2>Latest <span>News</span></h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur
turpis
</p>
</div>
<div class="news-outer">
<div class="row">
<div class="col-lg-8 mar-bottom-30">
<div class="events-list mar-bottom-30">
<div class="row display-flex">
<div class="col-lg-7 col-md-7">
<div class="events-content">
<div class="events-title">
<div class="time-from text-center">
<span class="date">25</span>
<span class="maina">July</span>
</div>
<h4><a href="single-right.html">Why choose Hotux Hotel to travel this summer</a></h4>
</div>
<div class="room-services mar-bottom-10">
<ul>
<li>
<a href="single-right.html"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a>
</li>
<li>
<a href="single-right.html"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a>
</li>
</ul>
</div>
<p class="mar-0">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh sapien et,
auctor vulputate quam donec vitae.
</p>
</div>
</div>
<div class="col-lg-5 col-md-5">
<div class="news-image">
<img src="images/news12.jpg" alt="image" />
</div>
</div>
</div>
</div>
<div class="events-list">
<div class="row display-flex">
<div class="col-lg-7 col-md-7">
<div class="events-content">
<div class="events-title">
<div class="time-from text-center">
<span class="date">25</span>
<span class="maina">July</span>
</div>
<h4><a href="single-right.html">Why choose Hotux Hotel to travel this summer</a></h4>
</div>
<div class="room-services mar-bottom-10">
<ul>
<li>
<a href="single-right.html"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a>
</li>
<li>
<a href="single-right.html"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a>
</li>
</ul>
</div>
<p class="mar-0">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh sapien et,
auctor vulputate quam donec vitae travel this summer.
</p>
</div>
</div>
<div class="col-lg-5 col-md-5">
<div class="news-image">
<img src="images/news13.jpg" alt="image" />
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 mar-bottom-30">
<div class="news-item">
<div class="news-image">
<img src="images/news3.jpg" alt="image" />
</div>
<div class="news-content">
<p class="date mar-bottom-5">16 DECEMBER 2019</p>
<h4><a href="single-right.html">Why choose Hotux Hotel to travel this summer</a></h4>
<div class="room-services mar-bottom-10">
<ul>
<li>
<a href="single-right.html"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a>
</li>
<li>
<a href="single-right.html"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a>
</li>
</ul>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
<a href="single-left.html">READ MORE <i class="fas fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<footer class="footer-style-1">
<div class="newsletter">
<div class="container">
<div class="section-title title-white">
<h2>Subscribe to our <span>Newsletter</span></h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur
turpis
</p>
</div>
<div class="newsletter-form">
<form>
<input type="email" placeholder="Enter your email" />
<a href="#" class="btn btn-orange">SIGN UP</a>
</form>
</div>
</div>
</div>
<div class="footer-top pad-bottom-20">
<div class="container">
<div class="footer-content">
<div class="row">
<div class="col-lg-3 col-md-6 mar-bottom-30">
<div class="footer-about">
<h4>Company Info</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius tellus vitae justo blandit ultrices.</p>
</div>
<div class="footer-payment">
<h4>We Accept</h4>
<ul>
<li><img src="images/icons/visa.png" alt="image" /></li>
<li><img src="images/icons/mastercard.png" alt="image" /></li>
<li><img src="images/icons/americanexpress.png" alt="image" /></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 mar-bottom-30">
<div class="quick-links">
<h4>Quick Links</h4>
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Rooms</a></li>
<li><a href="#">Testimonials</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 mar-bottom-30">
<div class="Rooms">
<h4>Rooms</h4>
<ul>
<li><a href="#">Single Rooms</a></li>
<li><a href="#">Double Rooms</a></li>
<li><a href="#">Studio Rooms</a></li>
<li><a href="#">Kingsize Rooms</a></li>
<li><a href="#">Presidentsuite Rooms</a></li>
<li><a href="#">Luxury Kings Rooms</a></li>
<li><a href="#">Connecting Rooms</a></li>
<li><a href="#">Murphy Rooms</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 mar-bottom-30">
<div class="footer-contact">
<h4>Contact info</h4>
<ul>
<li>Tel: 977-222-444-6666</li>
<li>Email: <a href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6cfc8c0c9e6cec9d2d3de88c5c9cb88c8d6">[email&#160;protected]</a></li>
<li>Fax: 977-222-444-666</li>
<li>Address: 445 Mount Eden Road, Sundarbasti, Chakrapath</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
<div class="copyright-content text-center">
<p class="white">
Copyright 2019. Made with <span><a href="https://cyclonethemes.com/">Cyclone Themes</a></span
              >. All Rights Reserved. <a href="#">Hotux</a>
</p>
<ul>
<li>
<a href="#" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a>
</li>
<li>
<a href="#" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a>
</li>
<li>
<a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a>
</li>
<li>
<a href="#" class="white"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
</li>
</ul>
</div>
</div>
</div>
@endsection
