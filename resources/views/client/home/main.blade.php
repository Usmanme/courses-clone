@extends('client.layout.app')
@section('title', 'Home')
@section('description', 'Home Descripiton.')
@section('keywords', 'Home Keywords')
<style>
    .form-select:not(.not-dark),
    ::placeholder {
        color: #fff !important;
    }

    .lcb,
    .rcb {
        padding: 0;
        background-color: #fff;
        margin: 0 0 20px 0;
        width: 100%;
    }

    .lcb {
        max-width: 100%;
        min-width: 300px;
    }

    .lcb-head {
        padding: 0 20px;
    }

    .lcb-head,
    .rcb-head {
        font-size: 1.55rem;
        line-height: 1.2;
        font-weight: 800;
    }

    .lcb-head span.lcb-title {
        padding-bottom: 4px;
        border-bottom: solid 3px #212121;
    }

    .lcb-body {
        padding: 20px 20px 30px 20px;
    }

    .lcb-body,
    .lcb-body p {
        font-size: 1rem;
        line-height: 1.6;
    }

    main section>:last-child,
    main article>:last-child,
    .education-description-wrapper>:last-child {
        margin-bottom: 0;
    }
    title {
    padding-bottom: 4px;
    border-bottom: solid 3px #212121;
}

    .fa-introbox ul {
        width: 100%;
        margin: 0 0 0 30px;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-content: flex-start;
        align-items: flex-start;
    }

    ul {
        list-style-position: outside;
        line-height: 1.6;
    }

    .fa-ul {
        list-style-type: none;
    }

    .fa-ul>li {
        position: relative;
    }

    .fa-introbox li {
        display: inline-block;
        flex: 0 1 31%;
        min-width: 31%;
    }

    .lcb li,
    .rcb li {
        margin: 0 0 0 10px;
    }

    .fa-introbox a.list-group-item {
        word-break: break-word;
        overflow-wrap: break-word;
        hyphens: auto;
        position: relative;
        display: inline-block;
        padding: 4px 30px 4px 10px;
        font-size: 14.5px;
        margin-bottom: 13px;
        letter-spacing: -.2px;
        color: #414141;
        font-weight: 300;
        border: none;
    }

    .emg-pga,
    .row.emg-pga {
        padding-bottom: 26px;
        margin: 0 0 26px 0;
        border-bottom: solid 1px #efefef;
    }

    .emg-pga .pga-col-media {
        width: 34%;
        padding: 0;
        position: relative;
    }

    img {
        display: inline-block;
        vertical-align: middle;
        max-width: 80%;
        height: auto;
        -ms-interpolation-mode: bicubic;
    }

    .column:last-child:not(:first-child),
    .columns:last-child:not(:first-child) {
        float: right;
    }

    .emg-pga .pga-col-content {
        width: 66%;
        padding: 0 0 0 14px;
    }

    .emg-pga .pga-subtitle {
        margin-bottom: -6px;
    }

    .entry-content {
        margin: 0px !important;
    }

    .description {
        text-align: center;
        width: 43%;
    }

    .clientImage {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .clientImage span {
        margin-left: 10px;
    }

    .clientImage img {
        width: 40px;
        border-radius: 50%;
    }

    .reviewSection {
        padding: 1rem;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-around;
    }

    .reviewItem {
        width: 300px;
        padding: 10px;
        margin: 1rem;
        cursor: pointer;
        border-radius: 10px;
        background-color: #10102a;
        border: 1px solid #10102a;
        transition: all .2s linear;
    }

    .reviewItem:hover {
        border-color: aqua;
        transform: scale(1.01);
        background-color: #090921;
        box-shadow: 0 0px 5px 0px #cbc0c0;
    }

    .top {
        margin-bottom: 1rem;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .top ul {
        display: flex;
        list-style: none;
    }

    .top ul li {
        padding-left: 4px;
    }

    article p {
        font-size: 15px;
        font-weight: 100;
        margin-bottom: 1rem;
        font-family: system-ui;
    }
    .banner-text {
        display: flex;
        flex-direction: column;
        max-width: 570px;
    }
    .review,.clientImage span {
        color: #fff;
    }
    .entry-meta p {
        color: #000;
    }
    .lcb:last-of-type {
    margin-bottom: 20px;
}

.lcb, .rcb {
    padding: 0;
    background-color: #fff;
    margin: 0 0 20px 0;
    width: 100%;
}
.lcb-head {
    padding: 0 20px;
}
.lcb-head, .rcb-head {
    font-size: 1.55rem;
    line-height: 1.2;
    font-weight: 800;
}
.lcb-head span.lcb-title {
    padding-bottom: 4px;
    border-bottom: solid 3px #212121;
}
.lcb-body {
    padding: 20px 20px 30px 20px;
}
h3, .h3 {
    color: #212121;
    font-size: 18px;
}
.lcb-body, .lcb-body p {
    font-size: 1rem;
    line-height: 1.6;
}
.emg-columns {
    display: flex;
    flex-wrap: wrap;
    clear: both;
    max-width: 100%;
    gap: 50px;
}
.emg-column ul {
    margin-bottom: 0 !important;
}


    @media screen and (max-width:700px) {
        .container {
            height: auto;
        }

        .description {
            width: 90%;
        }
    }

    @media screen and (max-width:375px) {
        .reviewSection {
            padding: 0;
        }

        .reviewItem {
            width: 100%;
        }

        .clientImage {
            margin-bottom: 0.6rem;
        }

        .top {
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
    }
</style>
@section('content')
    <div id="wrapper" class="clearfix">

        <section id="slider" class="slider-element min-vh-60 min-vh-md-100 dark"
            style="overflow: hidden; background: url('{{ asset('app-assets') }}/client/images/events/parallax/home.jpg') no-repeat center center;background-size: cover;">
            <div class="slider-inner">

                <div class="vertical-middle">
                    <div class="container py-5">
                        <div class="heading-block text-center border-bottom-0">
                            <div class="banner-text">
                                <p><strong>PROFESSIONAL & PERSONAL DEVELOPMENT COURSES</strong></p>
                                <h2>Ready to become the best you?
                                    Find courses to help you grow</h2>
                                <p>Whether you’re looking for professional courses, an evening fitness class or want to get your career started, you’ve come to the right place. Search and compare courses today!</p>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <select name="" id="" class="form-select">
                                        <option value="Course">Course Category</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select name="" id="" class="form-select">
                                        <option value="Course">Course Delievery</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="Type in the course">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success w-100">Search</button>
                                </div>

                            </div>
                            {{-- <h1>The Apple WWDC Event starts in:</h1> --}}
                        </div>

                        {{-- <div id="countdown-ex1" class="countdown countdown-large coming-soon mx-auto" data-year="2021" style="max-width:700px;"></div> --}}

                        {{-- <div class="text-center topmargin-lg">

                        <a href="#" class="button button-3d button-purple button-rounded button-xlarge">Buy Tickets</a>
                        <span class="d-none d-md-inline-block"> - OR - </span>
                        <a href="#" class="button button-3d button-white button-light button-rounded button-xlarge">Read Details</a>

                    </div> --}}
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
                        <h3>
                            <center>What kind of training do you want?</center>
                        </h3>
                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark border-bottom-0">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-calendar i-alt"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Online & Distance Courses<span class="subtitle">Learn new skills and gain new
                                            hobbies from the comfort of your home with online courses!</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark border-bottom-0">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-map i-alt"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>
                                        Professional Training
                                        <span class="subtitle">
                                            Want to retrain? Get certified? Or perhaps learn a new skill for your career?
                                            Start here!
                                        </span>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark border-bottom-0">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-microphone2 i-alt"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>
                                        Vocational Qualifications
                                        <span class="subtitle">
                                            It's never too late! Take your A Levels, a BTEC or kick-start your career with
                                            apprenticeships.
                                        </span>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark border-bottom-0">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-food2 i-alt"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>
                                        Fun & Leisure Classes
                                        <span class="subtitle">
                                            Life is too short to spend the whole time working. Spend time on yourself with
                                            hobby classes!
                                        </span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider divider-sm divider-center"><i class="icon-circle-blank"></i></div>
                    <div class="container">
                        <div class="lcb lcb-wide lcb-HtmlPageLcb" id="lcb-HtmlPageLcb">
                            <div class="lcb-wrapper">
                                <div class="lcb-inner">
                                    <div class="lcb-head">

                                        <span class="lcb-title">
                                            <h2 title="Popular Courses" class="h1frame">
                                                <center>Popular Courses</center>
                                            </h2>
                                        </span>
                                    </div>
                                    <div class="lcb-body">
                                        <section>
                                            <div class="fa-introbox">
                                                <ul class="fa-ul">
                                                    <li><a class="list-group-item"
                                                            href="/search/distance-online-elearning-flexible-training-courses"><span
                                                                class="fa-li"><i
                                                                    class="fa fa-globe-europe"></i></span>Online
                                                            Courses</a></li>
                                                    <li><a class="list-group-item"
                                                            href="/search/free-health-social-care-training-courses"><span
                                                                class="fa-li"><i
                                                                    class="fa fa-medkit"></i></span>Healthcare</a></li>
                                                    <li><a class="list-group-item"
                                                            href="/search/business-management-training-courses"><span
                                                                class="fa-li"><i
                                                                    class="fa fa-user-tie"></i></span>Business
                                                            Management</a></li>
                                                    <li><a class="list-group-item"
                                                            href="/search/oil-and-gas-training-courses"><span
                                                                class="fa-li"><i class="fa fa-burn"></i></span>Oil &amp;
                                                            Gas</a></li>
                                                    <li><a class="list-group-item"
                                                            href="/search/finance-training-courses"><span class="fa-li"><i
                                                                    class="fa fa-sack-dollar"></i></span> Finance </a></li>
                                                    <li><a class="list-group-item"
                                                            href="/search/marketing-training-courses"><span
                                                                class="fa-li"><i
                                                                    class="fa fa-sack-dollar"></i></span>Marketing</a>
                                                    </li>
                                                    <li><a class="list-group-item"
                                                            href="/search/cad-computer-aided-design-training-courses"><span
                                                                class="fa-li"><i
                                                                    class="fa fa-desktop-alt"></i></span>CAD</a></li>
                                                    <li><a class="list-group-item"
                                                            href="/search/apprenticeship-training-for-companies"><span
                                                                class="fa-li"><i
                                                                    class="fa fa-grin-beam"></i></span>Apprenticeships</a>
                                                    </li>
                                                    <li><a class="list-group-item"
                                                            href="/search/confidence-building-training-courses"><span
                                                                class="fa-li"><i
                                                                    class="fa fa-grin-beam"></i></span>Confidence
                                                            Building</a></li>
                                                    <li><a class="list-group-item"
                                                            href="/search/project-management-training-courses"><span
                                                                class="fa-li"><i class="fa fa-tasks"></i></span>Project
                                                            Management</a></li>
                                                    <li><a class="list-group-item"
                                                            href="/search/hlta-teaching-assistant-courses"><span
                                                                class="fa-li"><i
                                                                    class="fa fa-chalkboard-teacher"></i></span>Teacher
                                                            Training</a></li>
                                                    <li><a class="list-group-item"
                                                            href="/search/human-resources-management-training-courses"><span
                                                                class="fa-li"><i
                                                                    class="fa fa-people-carry"></i></span>Human
                                                            Resources</a></li>
                                                </ul>
                                                <div style="margin-top: 20px; text-align: center;">
                                                    <a href="/search/" class="button-big button-big-blue">See all course
                                                        categories</a>
                                                </div>
                                            </div>



                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>




                <div class="container clearfix">

                    <div class="row col-mb-80">
                        <div class="col-md-7">

                            <div class="fancy-title title-border">
                                <h3>Trending Topics</h3>
                            </div>

                            <div class="row">

                                <div class="entry event col-12">
                                    <div class="grid-inner row align-items-center g-0 p-4">
                                        <div class="col-md-4 mb-md-0">
                                            <a href="#" class="entry-image">
                                                <img src="{{ asset('app-assets') }}/client/images/events/thumbs/1.jpg"
                                                    alt="Inventore voluptates velit totam ipsa tenetur">
                                                <div class="entry-date">10<span>Apr</span></div>
                                            </a>
                                        </div>
                                        <div class="col-md-8 ps-md-4">
                                            <div class="entry-title title-xs">
                                                <h2><a href="#">AI's Impact on Project Management</a></h2>
                                            </div>
                                            <div class="entry-meta">
                                                <p>Uncover AI's transformative influence, legal insights, and upcoming
                                                    trends with this free white paper. </p>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#" class="btn btn-danger">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry event col-12">
                                    <div class="grid-inner row align-items-center g-0 p-4">
                                        <div class="col-md-4 mb-md-0">
                                            <a href="#" class="entry-image">
                                                <img src="{{ asset('app-assets') }}/client/images/events/thumbs/2.jpg"
                                                    alt="Nemo quaerat nam beatae iusto minima vel">
                                                <div class="entry-date">16<span>Apr</span></div>
                                            </a>
                                        </div>
                                        <div class="col-md-8 ps-md-4">
                                            <div class="entry-title title-xs">
                                                <h2><a href="#">Nemo quaerat nam beatae iusto minima vel</a></h2>
                                            </div>
                                            <div class="entry-meta">
                                                <p>Uncover AI's transformative influence, legal insights, and upcoming
                                                    trends with this free white paper.</p>
                                            </div>
                                            <div class="entry-content">
                                                <a href="#" class="btn btn-danger">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Reviews --}}
                                <h2> Our Happy Clients </h2>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                    atque? Repudiandae
                                    possimus asperiores hic nemo id a molestiae minus impedit!</p>


                            </div>

                        </div>

                        <div class="col-md-5">

                            <div class="fancy-title title-border">
                                <h4>Favourite Locations</h4>
                            </div>

                            <div class="gmap max-vh-40 max-vh-md-none mb-5" style="height: 300px;"
                                data-address="NSW, Australia" data-zoom="4"
                                data-markers='[{ address: "Melbourne, Australia" }, { address: "Sydney, Australia" }]'
                                data-scrollwheel="false"></div>



                            <div class="w-100 masonry-thumbs grid-container grid-4 mb-5" data-lightbox="gallery">
                                {{-- Side bar for newslatter --}}
                            </div>

                            <div class="fancy-title title-border">
                                <h4>Video</h4>
                            </div>

                            <iframe src="//player.vimeo.com/video/30626474" width="500" height="281"
                                allow="autoplay; fullscreen" allowfullscreen></iframe>

                        </div>
                    </div>

                    <!-- Clients Review Section -->
                    <div class="reviewSection">

                        <!-- Clients Review-1 Section Starts from Here  -->
                        <div class="reviewItem">
                            <div class="top">
                                <div class="clientImage">
                                    <img src="{{ asset('app-assets') }}/client/images/testimonials/3.jpg" alt="">
                                    <span>Raju Sheoran</span>
                                </div>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                </ul>
                            </div>
                            <article>
                                <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Fugit beatae ipsa
                                    voluptatibus perferendis quos eaque nemo error tempora harum quas,
                                    laudantium tenetur, neque,
                                    facere exercitationem!</p>
                                <p>Jan 01, 2023</p>
                            </article>
                        </div>

                        <!-- Clients Review-2 Section Starts from Here  -->
                        <div class="reviewItem">
                            <div class="top">
                                <div class="clientImage">
                                    <img src="{{ asset('app-assets') }}/client/images/testimonials/3.jpg" alt="">
                                    <span>Raju Sheoran</span>
                                </div>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                </ul>
                            </div>
                            <article>
                                <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Fugit beatae ipsa
                                    voluptatibus perferendis quos eaque nemo error tempora harum quas,
                                    laudantium tenetur, neque,
                                    facere exercitationem!</p>
                                <p>Jan 01, 2023</p>
                            </article>
                        </div>

                        <!-- Clients Review-3 Section Starts from Here  -->
                        <div class="reviewItem">
                            <div class="top">
                                <div class="clientImage">
                                    <img src="{{ asset('app-assets') }}/client/images/testimonials/3.jpg" alt="">
                                    <span>Raju Sheoran</span>
                                </div>
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                </ul>
                            </div>
                            <article>
                                <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Fugit beatae ipsa
                                    voluptatibus perferendis quos eaque nemo error tempora harum quas,
                                    laudantium tenetur, neque,
                                    facere exercitationem!</p>
                                <p>Jan 01, 2023</p>
                            </article>
                        </div>
                    </div>



                </div>

               <div class="container">
                <div class="lcb lcb-wide lcb-HtmlPageLcb" id="lcb-HtmlPageLcb">
                    <div class="lcb-wrapper">
                        <div class="lcb-inner">
                                <div class="lcb-head">

                                        <span class="lcb-title"><h2 title="Find Training Courses | Findcourses.co.uk" class="h1frame">Find Training Courses | Findcourses.co.uk</h2></span>
                                </div>
                            <div class="lcb-body">
                                <section>
                                    <h3>At findcourses, we believe <strong>education shouldn't stop when you leave school. </strong></h3>
                <p></p>
                <p>Professional development helps you reach the next stage of your career, and personal development helps you achieve your goals. That's why we help you find training courses that enable you to grow.</p>
                <p></p>
                <h3>What courses can you find on findcourses?</h3>
                <p>With our site you can search and compare a range of courses, including:</p>
                <p></p>
                <div class="emg-columns emg-columns-3 emg-background-flex">
                <div class="emg-column padding-8">
                <ul>
                <li>Professional training</li>
                <li>Vocational courses</li>
                <li>BTEC courses</li>
                <li>NVQ courses</li>
                </ul>
                </div>
                <div class="emg-column padding-8">
                <ul>
                <li>Apprenticeships</li>
                <li>Government-funded courses</li>
                <li>Exercise classes</li>
                </ul>
                </div>
                <div class="emg-column padding-8">
                <ul>
                <li>Hobby courses</li>
                <li>Degree courses</li>
                <li>Diploma courses</li>
                <li>Courses with CPD hours</li>
                </ul>
                </div>
                </div>
                <p></p>
                <p>We help <strong>connect you to over 2,000 training providers</strong>, and using our site you can <strong>add courses to your login</strong> to save them for later, compare them or <strong>apply for them online</strong> using our easy booking form.</p>
                <p>If you're not sure you're ready to book - don't worry - you can get in touch with the provider on our site too, and ask any questions you'd like answered.</p>
                <p></p>
                <h3>Who are findcourses.co.uk?</h3>
                <p>Our mission is to connect learners looking for training courses with the education partners that will help them improve. We champion learning and development both inside and outside the office, so start your search and compare training courses today!</p>
                <p></p>
                <div class="emg-columns emg-columns-3 emg-background-flex">
                <div class="emg-column">
                <p style="text-align: center;"><strong>✎28,000 + courses</strong></p>
                </div>
                <div class="emg-column">
                <p style="text-align: center;"><strong>★2,000 + providers</strong></p>
                </div>
                <div class="emg-column">
                <p style="text-align: center;"><strong>〄 UK &amp; Worldwide</strong></p>
                </div>
                </div>
                <p></p>
                <p><a href="/about-us-2247" class="button-full button-big-blue">Find out more about us</a></p>
                <p></p>


                                </section>
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
