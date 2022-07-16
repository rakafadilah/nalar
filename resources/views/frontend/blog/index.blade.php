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
    <div class="container pt-12 pt-md-16">
        <div class="card shadow-none my-n15 my-lg-n17">
            <div class="card-body py-12 py-lg-14 px-lg-11 py-xl-16 px-xl-13">
                <!--akan di isi oleh content -->
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="blog classic-view mt-n17">
                            <article class="post">
                                <div class="card">
                                    <figure class="card-img-top overlay overlay1 hover-scale"><a class="link-dark" href="blog-post.html"><img src="{{asset('frontend/img/photos/b1.jpg')}}" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Teamwork</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="blog-post.html">Amet Dolor Bibendum Parturient Cursus</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur.</p>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!--/.card-body -->
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>5 Jul 2021</span></li>
                                            <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a></li>
                                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span> Comments</span></a></li>
                                            <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </article>
                            <!-- /.post -->
                            <article class="post">
                                <div class="card">
                                    <div class="post-slider card-img-top">
                                        <div class="basic-slider owl-carousel dots-over" data-nav="true" data-margin="5">
                                            <div class="item"><img src="{{asset('frontend/img/photos/b2.jpg')}}" class="" alt="" /></div>
                                            <div class="item"><img src="{{asset('frontend/img/photos/b3.jpg')}}" alt="" /></div>
                                        </div>
                                        <!-- /.basic-slider -->
                                    </div>
                                    <!-- /.post-slider -->
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Ideas</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="blog-post.html">Fringilla Ligula Pharetra Amet</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur.</p>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!--/.card-body -->
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25 Jun 2021</span></li>
                                            <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a></li>
                                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>5<span> Comments</span></a></li>
                                            <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>4</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </article>
                            <!-- /.post -->
                            <article class="post">
                                <div class="card">
                                    <div class="card-img-top">
                                        <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="j_Y2Gwaj7Gs"></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Workspace</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="blog-post.html">Consectetur Bibendum Sollicitudin Vulputate</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur.</p>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!--/.card-body -->
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18 May 2021</span></li>
                                            <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a></li>
                                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>8<span> Comments</span></a></li>
                                            <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>6</a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </article>
                            <!-- /.post -->
                        </div>
                        <!-- /.blog -->
                        <div class="blog grid grid-view">
                            <div class="row isotope gx-md-8 gy-8 mb-8">
                                <article class="item post col-md-6">
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
                                                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
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
                                <!-- /.post -->
                                <article class="item post col-md-6">
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
                                                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
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
                                <!-- /.post -->
                                <article class="item post col-md-6">
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
                                                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
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
                                <!-- /.post -->
                                <article class="item post col-md-6">
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
                                            <div class="post-content">
                                                <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
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
                                <!-- /.post -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.blog -->
                        <nav class="d-flex" aria-label="pagination">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.pagination -->
                        </nav>
                        <!-- /nav -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</section>


@endsection