@extends('frontend.body')

@section('content_front')
<section class="wrapper bg-gray">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <!--akan di isi oleh content -->
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <div class="post-category text-line">
                        <!-- cara mengambil data dari foreignkey relasi yang ada di dalam model -->
                        <a href="#" class="hover" rel="category">{{$article->categories->name}}</a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4">{{$article->title}}</h1>
                    <ul class="post-meta mb-5">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$article->created_at->format('d M Y')}}</span></li>
                        <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>oleh: {{$article->users->name}}</span></a></li>
                       
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog single mt-n17">
                    <div class="card">
                        <figure class="card-img-top"><img src="{{asset('storage/'.$article->image)}}" alt="" /></figure>
                        <div class="card-body">
                            <div class="classic-view">
                                <article class="post">
                                    {!! $article->content !!}
                                </article>
                                <!-- /.post -->
                            </div>
                            <!-- /.classic-view -->
                            <hr />
                           
                            <!-- /.author-info -->
                            
                            <!-- /.social -->
                            <hr />
                            <h3 class="mb-6">You Might Also Like</h3>
                            <div class="carousel owl-carousel blog grid-view mb-16" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "2"}}'>
                                <div class="item">
                                    <article>
                                        <figure class="overlay overlay1 hover-scale rounded mb-5"><a href="#"> <img src="{{asset('frontend/img/photos/b4.jpg')}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Coding</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Ligula tristique quis risus</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></li>
                                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
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
                                        <figure class="overlay overlay1 hover-scale rounded mb-5"><a href="#"> <img src="{{asset('frontend/img/photos/b5.jpg')}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Workspace</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Nullam id dolor elit id nibh</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2021</span></li>
                                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
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
                                        <figure class="overlay overlay1 hover-scale rounded mb-5"><a href="#"> <img src="{{asset('frontend/img/photos/b6.jpg')}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Meeting</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Ultricies fusce porta elit</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
                                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
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
                                        <figure class="overlay overlay1 hover-scale rounded mb-5"><a href="#"> <img src="{{asset('frontend/img/photos/b7.jpg')}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Business Tips</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">Morbi leo risus porta eget</a></h2>
                                        </div>
                                        <div class="post-footer">
                                            <ul class="post-meta mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2021</span></li>
                                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
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
                            <hr />

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->


    </div>
</section>

@endsection