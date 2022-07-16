@extends('frontend.body')

@section('content_front')
<section class="wrapper bg-gray">
    <div class="container pt-12 pt-md-16 text-center">
        <div class="row">
            <div class="col-lg-8 col-xxl-7 mx-auto text-center" data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h2 class="fs-16 text-uppercase ls-xl text-dark mb-4">Hello! This is Sandbox</h2>
                <h1 class="display-1 fs-58 mb-7">We bring rapid solutions for your business.</h1>
                <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                    <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
                    <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
                </div>
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{asset('frontend/img/photos/bg11.jpg')}}" alt="" /></figure>
</section>
<!-- /section -->

<section class="wrapper bg-gray">
    <div class="container">
        <div class="card shadow-none my-n15 my-lg-n17">
            <div class="card-body py-12 py-lg-14 px-lg-11 py-xl-16 px-xl-13">
                <div class="row text-center">
                    <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Case Studies</h2>
                        <h3 class="display-4 mb-9">Check out some of our awesome projects with creative ideas and great design.</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="carousel owl-carousel blog grid-view mb-18" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay1 hover-scale rounded mb-6"><a href="#"> <img src="{{asset('frontend/img/photos/b4.jpg')}}" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <h2 class="post-title h3 mb-3"><a class="link-dark" href="blog-post.html">Ligula tristique quis risus</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Coding</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <article>
                            <figure class="overlay overlay1 hover-scale rounded mb-6"><a href="#"> <img src="{{asset('frontend/img/photos/b5.jpg')}}" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <h2 class="post-title h3 mb-3"><a class="link-dark" href="blog-post.html">Nullam id dolor elit id nibh</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2021</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Workspace</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <article>
                            <figure class="overlay overlay1 hover-scale rounded mb-6"><a href="#"> <img src="{{asset('frontend/img/photos/b6.jpg')}}" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <h2 class="post-title h3 mb-3"><a class="link-dark" href="blog-post.html">Ultricies fusce porta elit</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Meeting</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <article>
                            <figure class="overlay overlay1 hover-scale rounded mb-6"><a href="#"> <img src="{{asset('frontend/img/photos/b7.jpg')}}" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <h2 class="post-title h3 mb-3"><a class="link-dark" href="blog-post.html">Morbi leo risus porta eget</a></h2>
                            </div>
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2021</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Business Tips</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.owl-carousel -->
                <div class="row align-items-center mb-7">
                    <div class="col-md-8 col-lg-8 col-xl-7 col-xxl-6 pe-lg-17">
                        <h2 class="display-4 mb-3">Recent Projects</h2>
                        <p class="lead fs-lg">We love to turn ideas into beautiful things.</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="carousel owl-carousel grid-view" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                    <div class="item">
                        <figure class="rounded mb-6"><a href="single-project.html"> <img src="{{asset('frontend/img/photos/pd1.jpg')}}" alt="" /></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <div class="post-category text-line mb-3 text-yellow">Coffee</div>
                                <h2 class="post-title h3">Cras Fermentum Sem</h2>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <figure class="rounded mb-6"><a href="single-project2.html"> <img src="{{asset('frontend/img/photos/pd2.jpg')}}" alt="" /></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <div class="post-category text-line mb-3 text-red">Stationary</div>
                                <h2 class="post-title h3">Mollis Ipsum Mattis</h2>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <figure class="rounded mb-6"><a href="single-project3.html"> <img src="{{asset('frontend/img/photos/pd3.jpg')}}" alt="" /></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <div class="post-category text-line mb-3 text-orange">Branding</div>
                                <h2 class="post-title h3">Ipsum Ultricies Cursus</h2>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <figure class="rounded mb-6"><a href="single-project2.html"> <img src="{{asset('frontend/img/photos/pd4.jpg')}}" alt="" /></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <div class="post-category text-line mb-3 text-purple">Product</div>
                                <h2 class="post-title h3">Inceptos Euismod Egestas</h2>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <figure class="rounded mb-6"><a href="single-project3.html"> <img src="{{asset('frontend/img/photos/pd5.jpg')}}" alt="" /></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <div class="post-category text-line mb-3 text-leaf">Print</div>
                                <h2 class="post-title h3">Ipsum Mollis Vulputate</h2>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <figure class="rounded mb-6"><a href="single-project.html"> <img src="{{asset('frontend/img/photos/pd6.jpg')}}" alt="" /></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <div class="post-category text-line mb-3 text-aqua">Workshop</div>
                                <h2 class="post-title h3">Porta Ornare Cras</h2>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->
                </div>

                
            </div>


            <!--/.card-body -->
        </div>
        <!--/.card -->
    </div>
    <!-- /.container -->
</section>

<section class="wrapper bg-gray">
    <div class="container">
        <div class="card shadow-none my-n15 my-lg-n17">
            <div class="card-body py-12 py-lg-14 py-xl-16">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                        <h2 class="fs-15 text-uppercase text-primary text-center">Our News</h2>
                        <h3 class="display-4 mb-6 text-center">Here are the latest company news from our blog that got the most attention.</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="position-relative">
                    <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
                    <div class="carousel owl-carousel gap-small blog grid-view" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                        <div class="item">
                            <div class="item-inner">
                                <article>
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay1 hover-scale"><a href="#"> <img src="{{asset('frontend/img/photos/b4.jpg')}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Coding</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Ligula tristique quis risus</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></li>
                                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                                <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <article>
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay1 hover-scale"><a href="#"> <img src="{{asset('frontend/img/photos/b5.jpg')}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Workspace</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Nullam id dolor elit id nibh</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2021</span></li>
                                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                                                <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <article>
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay1 hover-scale"><a href="#"> <img src="{{asset('frontend/img/photos/b6.jpg')}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Meeting</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Ultricies fusce porta elit</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
                                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                                                <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <article>
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay1 hover-scale"><a href="#"> <img src="{{asset('frontend/img/photos/b7.jpg')}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Business Tips</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Morbi leo risus porta eget</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2021</span></li>
                                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                                                <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.owl-carousel -->
                </div>

            </div>
        </div>
    </div>
</section>
@endsection