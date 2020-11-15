@extends('home.layout')

@section('contents')

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="home/images/banner/banner-1.jpg">
    <div class="container">
        <div class="hero-slider">
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Your bright future
                            is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight"
                            data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft"
                            data-delay-in=".7">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                            data-animation-in="fadeInDown" data-delay-in=".1">Your bright future is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3"
                            data-animation-in="fadeInUp" data-delay-in=".1">Your bright future is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown"
                            data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply
                            now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /hero slider -->

<!-- about us -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1">
                <h2 class="section-title">STAIS Hikmatul Fadhillah</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat </p>
                <p>cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                    perspiciatis unde omnis iste natus error sit voluptatem</p>
                <a href="about.html" class="btn btn-primary-outline">Learn more</a>
            </div>
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                <img class="img-fluid w-100" src="home/images/about/about-us.jpg" alt="about image">
            </div>
        </div>
    </div>
</section>
<!-- /about us -->

<!-- cta -->
<section class="section bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h6 class="text-white font-secondary mb-0">Penerimaan Mahasiswa Baru</h6>
                <h2 class="section-title text-white">Informasi Mahasiswa Baru</h2>
                <a href="contact.html" class="btn btn-secondary">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- /cta -->

<!-- events -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">Agenda</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <div>
                        <a href="events.html" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see
                            all</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                        <img class="card-img-top rounded-0" src="home/images/events/event-1.jpg" alt="event thumb">
                        <div class="card-date"><span>18</span><br>December</div>
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
                        <a href="event-single.html">
                            <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
                        </a>
                    </div>
                </div>
            </div>
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                        <img class="card-img-top rounded-0" src="home/images/events/event-2.jpg" alt="event thumb">
                        <div class="card-date"><span>21</span><br>December</div>
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
                        <a href="event-single.html">
                            <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
                        </a>
                    </div>
                </div>
            </div>
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                        <img class="card-img-top rounded-0" src="home/images/events/event-3.jpg" alt="event thumb">
                        <div class="card-date"><span>23</span><br>December</div>
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
                        <a href="event-single.html">
                            <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile see all button -->
        <div class="row">
            <div class="col-12 text-center">
                <a href="course.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
            </div>
        </div>
    </div>
</section>
<!-- /events -->

<!-- blog -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">Berita Terkini</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <div>
                        <a href="{{ route('berita.index') }}" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div
                    class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="home/images/blog/post-1.jpg" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">August 28, 2018</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">By Somrat Sorkar</li>
                        </ul>
                        <a href="blog-single.html">
                            <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
                        </a>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
                    </div>
                </div>
            </article>
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div
                    class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="home/images/blog/post-2.jpg" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">August 13, 2018</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">By Jonathon Drew</li>
                        </ul>
                        <a href="blog-single.html">
                            <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
                        </a>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
                    </div>
                </div>
            </article>
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div
                    class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="home/images/blog/post-3.jpg" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">August 24, 2018</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">By Alex Pitt</li>
                        </ul>
                        <a href="blog-single.html">
                            <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
                        </a>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- /blog -->

@endsection