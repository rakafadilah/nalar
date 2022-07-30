@extends('frontend.body')

@section('content_front')
<section class="wrapper bg-gray">
    <div class="container pt-12 pt-md-16 text-center">
        <div class="row">
            <div class="col-lg-8 col-xxl-7 mx-auto text-center" data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h2 class="fs-16 text-uppercase ls-xl text-dark mb-4">{{$home->title}}</h2>
                <h1 class="display-1 fs-58 mb-7">{{$home->subtitle}}</h1>
    
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{asset('storage/'.$home->image)}}" alt="" /></figure>
</section>
<!-- /section -->

<section class="wrapper bg-gray">
    <div class="container">
        <div class="card shadow-none my-n15 my-lg-n17">
            <div class="card-body py-12 py-lg-14 px-lg-11 py-xl-16 px-xl-13">
                <div class="row text-center">
                    <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">{{$home->title1}}</h2>
                        <h3 class="display-4 mb-9">{{$home->subtitle1}}</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="carousel owl-carousel blog grid-view mb-18" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                   @foreach($classes as $class)
                    <div class="item">
                        <article>
                            <figure class="overlay overlay1 hover-scale rounded mb-6"><a href="{{route('article.show', $class->slug)}}"> <img src="{{asset('storage/'.$class->image)}}" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <h2 class="post-title h3 mb-3">
                                    <a class="link-dark" href="blog-post.html">{{$class->title}}</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$class->created_at->format('d M Y')}}</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>oleh: {{$class->users->name}}</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    @endforeach
                    <!-- /.item -->
                </div>
                <!-- /.owl-carousel -->
                <div class="row align-items-center mb-7">
                    <div class="col-md-8 col-lg-8 col-xl-7 col-xxl-6 pe-lg-17">
                        <h2 class="display-4 mb-3">{{$home->title2}}</h2>
                        <p class="lead fs-lg">{{$home->subtitle2}}</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="carousel owl-carousel grid-view" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                    @foreach($adss as $ads)
                    <div class="item">
                        <figure class="rounded mb-6"><a href="{{asset('storage/'.$ads->image)}}"> <img src="{{asset('storage/'.$ads->image)}}" alt="" /></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h2 class="post-title h3">{{$ads->title}}</h2>
                            </div>
                            <!-- /.post-header -->  
                        </div>
                        <!-- /.project-details -->
                    </div>
                    @endforeach
                    
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
                        <h2 class="fs-15 text-uppercase text-primary text-center">{{$home->title3}}</h2>
                        <h3 class="display-4 mb-6 text-center">{{$home->subtitle3}}</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="position-relative">
                    <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
                    <div class="carousel owl-carousel gap-small blog grid-view" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                       @foreach($corners as $corner) 
                        <div class="item">
                            <div class="item-inner">
                                <article>
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay1 hover-scale"><a href="{{route('article.show', $corner->slug)}}"> <img src="{{asset('storage/'.$corner->image)}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="{{route('article.show', $corner->slug)}}" class="hover" rel="category">{{$corner->categories->name}}</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog-post.html">{{$corner->title}}</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                            {!! \Illuminate\Support\Str::limit(strip_tags($corner->content), 100, $end='...')  !!}
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$class->created_at->format('d M Y')}}</span></li>
  
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
                     @endforeach
                        <!-- /.item -->
                    </div>
                    <!-- /.owl-carousel -->
                </div>

            </div>
        </div>
    </div>
</section>
@endsection