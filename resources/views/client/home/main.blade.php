@extends('client.layout.app')
@section('title','Home')
@section('description','Home Descripiton.')
@section('keywords','Home Keywords')

@section('content')
<div id="wrapper" class="clearfix">

    <section id="slider" class="slider-element min-vh-60 min-vh-md-100 dark" style="overflow: hidden; background: url('{{ asset('app-assets') }}/client/images/events/parallax/home.jpg') no-repeat center center;background-size: cover;">
        <div class="slider-inner">

            <div class="vertical-middle">
                <div class="container py-5">
                    <div class="heading-block text-center border-bottom-0">
                        <h1>The Apple WWDC Event starts in:</h1>
                    </div>

                    <div id="countdown-ex1" class="countdown countdown-large coming-soon mx-auto" data-year="2021" style="max-width:700px;"></div>

                    <div class="text-center topmargin-lg">

                        <a href="#" class="button button-3d button-purple button-rounded button-xlarge">Buy Tickets</a>
                        <span class="d-none d-md-inline-block"> - OR - </span>
                        <a href="#" class="button button-3d button-white button-light button-rounded button-xlarge">Read Details</a>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row col-mb-50">
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark border-bottom-0">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-calendar i-alt"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Interactive Sessions<span class="subtitle">Lorem ipsum dolor sit</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark border-bottom-0">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-map i-alt"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Great Locations<span class="subtitle">Officia ipsam laudantium</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark border-bottom-0">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-microphone2 i-alt"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Global Speakers<span class="subtitle">Laudantium cum dignissimos</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark border-bottom-0">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-food2 i-alt"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>In-between Meals<span class="subtitle">Perferendis accusantium quae</span></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider divider-sm divider-center"><i class="icon-circle-blank"></i></div>

                <div class="heading-block center">
                    <h2>Speakers.</h2>
                    <span>Over 15 Speakers &amp; 1000+ Developers in attendance.</span>
                </div>

                <div class="row justify-content-center col-mb-50">
                    <div class="col-sm-6 col-lg-4">

                        <div class="team">
                            <div class="team-image">
                                <img src="{{ asset('app-assets') }}/client/images/team/3.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4>John Doe</h4><span>CEO, Apple Inc.</span></div>
                                <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia eum rerum at voluptatibus saepe totam possimus.</div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-lg-4">

                        <div class="team">
                            <div class="team-image">
                                <img src="{{ asset('app-assets') }}/client/images/team/2.jpg" alt="Josh Thompson">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4>Josh Thompson</h4><span>Co-Founder, Google Inc.</span></div>
                                <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia eum rerum at voluptatibus saepe totam possimus.</div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-lg-4">

                        <div class="team">
                            <div class="team-image">
                                <img src="{{ asset('app-assets') }}/client/images/team/8.jpg" alt="Mary Jane">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4>Mary Jane</h4><span>Entreprenuer</span></div>
                                <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia eum rerum at voluptatibus saepe totam possimus.</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="section mb-0">
                <div class="container clearfix">

                    <div class="heading-block center">
                        <h3>Receive <span>regular</span> Event Updates</h3>
                    </div>

                    <div class="subscribe-widget">
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form2" action="include/subscribe.php" method="post" class="mb-0">
                            <div class="input-group input-group-lg mx-auto" style="max-width:600px;">
                                <div class="input-group-text"><i class="icon-email2"></i></div>
                                <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <button class="btn btn-secondary" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="parallax bottommargin-lg dark" style="padding: 60px 0; background-image: url('{{ asset('app-assets') }}/client/images/parallax/calendar.jpg'); background-repeat: repeat-y; height: auto;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -500px;">
                <div class="container clearfix">

                    <div class="events-calendar">
                        <div class="events-calendar-header clearfix">
                            <h2>Events Calendar</h2>
                            <h3 class="calendar-month-year">
                                <span id="calendar-month" class="calendar-month"></span>
                                <span id="calendar-year" class="calendar-year"></span>
                                <nav>
                                    <span id="calendar-prev" class="calendar-prev"><i class="icon-chevron-left"></i></span>
                                    <span id="calendar-next" class="calendar-next"><i class="icon-chevron-right"></i></span>
                                    <span id="calendar-current" class="calendar-current" title="Got to current date"><i class="icon-reload"></i></span>
                                </nav>
                            </h3>
                        </div>
                        <div id="calendar" class="fc-calendar-container"></div>
                    </div>

                </div>
            </div>

            <div class="container clearfix">

                <div class="row col-mb-80">
                    <div class="col-md-7">

                        <div class="fancy-title title-border">
                            <h3>Upcoming Events</h3>
                        </div>

                        <div class="row">

                            <div class="entry event col-12">
                                <div class="grid-inner row align-items-center g-0 p-4">
                                    <div class="col-md-4 mb-md-0">
                                        <a href="#" class="entry-image">
                                            <img src="{{ asset('app-assets') }}/client/images/events/thumbs/1.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
                                            <div class="entry-date">10<span>Apr</span></div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 ps-md-4">
                                        <div class="entry-title title-xs">
                                            <h2><a href="#">Inventore voluptates velit totam ipsa tenetur</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                                <li><a href="#"><i class="icon-map-marker2"></i> Melbourne, Australia</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <a href="#" class="btn btn-secondary" disabled="disabled">Buy Tickets</a> <a href="#" class="btn btn-danger">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry event col-12">
                                <div class="grid-inner row align-items-center g-0 p-4">
                                    <div class="col-md-4 mb-md-0">
                                        <a href="#" class="entry-image">
                                            <img src="{{ asset('app-assets') }}/client/images/events/thumbs/2.jpg" alt="Nemo quaerat nam beatae iusto minima vel">
                                            <div class="entry-date">16<span>Apr</span></div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 ps-md-4">
                                        <div class="entry-title title-xs">
                                            <h2><a href="#">Nemo quaerat nam beatae iusto minima vel</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                                <li><a href="#"><i class="icon-map-marker2"></i> Perth, Australia</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <a href="#" class="btn btn-info">RSVP</a> <a href="#" class="btn btn-danger">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry event col-12">
                                <div class="grid-inner row align-items-center g-0 p-4">
                                    <div class="col-md-4 mb-md-0">
                                        <a href="#" class="entry-image">
                                            <img src="{{ asset('app-assets') }}/client/images/events/thumbs/3.jpg" alt="Ducimus ipsam error fugiat harum recusandae">
                                            <div class="entry-date">3<span>May</span></div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 ps-md-4">
                                        <div class="entry-title title-xs">
                                            <h2><a href="#">Ducimus ipsam error fugiat harum recusandae</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                                <li><a href="#"><i class="icon-map-marker2"></i> Melbourne, Australia</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <a href="#" class="btn btn-secondary">Buy Tickets</a> <a href="#" class="btn btn-danger">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry event col-12">
                                <div class="grid-inner row align-items-center g-0 p-4">
                                    <div class="col-md-4 mb-md-0">
                                        <a href="#" class="entry-image">
                                            <img src="{{ asset('app-assets') }}/client/images/events/thumbs/4.jpg" alt="Nisi officia adipisci molestiae aliquam">
                                            <div class="entry-date">16<span>Jun</span></div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 ps-md-4">
                                        <div class="entry-title title-xs">
                                            <h2><a href="#">Nisi officia adipisci molestiae aliquam</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#"><i class="icon-time"></i> 12:00 - 18:00</a></li>
                                                <li><a href="#"><i class="icon-map-marker2"></i> New York</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <a href="#" class="btn btn-info">RSVP</a> <a href="#" class="btn btn-danger">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-5">

                        <div class="fancy-title title-border">
                            <h4>Favourite Locations</h4>
                        </div>

                        <div class="gmap max-vh-40 max-vh-md-none mb-5" style="height: 300px;" data-address="NSW, Australia" data-zoom="4" data-markers='[{ address: "Melbourne, Australia" }, { address: "Sydney, Australia" }]' data-scrollwheel="false"></div>

                        <div class="fancy-title title-border">
                            <h4>Gallery</h4>
                        </div>

                        <div class="w-100 masonry-thumbs grid-container grid-4 mb-5" data-lightbox="gallery">
                            <a class="grid-item" href="images/events/1.jpg" data-lightbox="gallery-item"><img src="{{ asset('app-assets') }}/client/images/events/thumbs/1.jpg" alt="Gallery Thumb 1"></a>
                            <a class="grid-item" href="images/events/2.jpg" data-lightbox="gallery-item"><img src="{{ asset('app-assets') }}/client/images/events/thumbs/2.jpg" alt="Gallery Thumb 2"></a>
                            <a class="grid-item" href="images/events/3.jpg" data-lightbox="gallery-item"><img src="{{ asset('app-assets') }}/client/images/events/thumbs/3.jpg" alt="Gallery Thumb 3"></a>
                            <a class="grid-item" href="images/events/4.jpg" data-lightbox="gallery-item"><img src="{{ asset('app-assets') }}/client/images/events/thumbs/4.jpg" alt="Gallery Thumb 4"></a>
                            <a class="grid-item" href="images/events/5.jpg" data-lightbox="gallery-item"><img src="{{ asset('app-assets') }}/client/images/events/thumbs/5.jpg" alt="Gallery Thumb 5"></a>
                            <a class="grid-item" href="images/events/6.jpg" data-lightbox="gallery-item"><img src="{{ asset('app-assets') }}/client/images/events/thumbs/6.jpg" alt="Gallery Thumb 6"></a>
                            <a class="grid-item" href="images/events/7.jpg" data-lightbox="gallery-item"><img src="{{ asset('app-assets') }}/client/images/events/thumbs/7.jpg" alt="Gallery Thumb 7"></a>
                            <a class="grid-item" href="images/events/8.jpg" data-lightbox="gallery-item"><img src="{{ asset('app-assets') }}/client/images/events/thumbs/8.jpg" alt="Gallery Thumb 8"></a>
                        </div>

                        <div class="fancy-title title-border">
                            <h4>Video</h4>
                        </div>

                        <iframe src="//player.vimeo.com/video/30626474" width="500" height="281" allow="autoplay; fullscreen" allowfullscreen></iframe>

                    </div>
                </div>

                <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget mb-5" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6" data-items-xl="7">

                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/2.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/1.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/3.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/4.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/5.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/6.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/7.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/8.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/9.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/10.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/11.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/12.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/13.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="http://logofury.com/"><img src="{{ asset('app-assets') }}/client/images/clients/14.png" alt="Clients"></a></div>

                </div>


            </div>

            <div class="section footer-stick mt-0">

                <h4 class="text-uppercase text-center"><span>Attendees</span> Feedback</h4>

                <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="{{ asset('app-assets') }}/client/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                    <div class="testi-meta">
                                        Steve Jobs
                                        <span>Apple Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="{{ asset('app-assets') }}/client/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="{{ asset('app-assets') }}/client/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                    <div class="testi-meta">
                                        John Doe
                                        <span>XYZ Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->

    <!-- #footer end -->

</div>
@endsection