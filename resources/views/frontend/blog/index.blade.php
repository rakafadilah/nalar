@extends('frontend.body')

@section('content_front')
<section class="wrapper bg-gray">
    <div class="container pt-10 pt-md-10 text-center">
        <div class="row">
            <div class="col-lg-8 col-xxl-7 mx-auto text-center" data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h2 class="fs-16 text-uppercase ls-xl text-dark mb-4"> {{$page->title}}</h2>
                <h1 class="display-1 fs-58 mb-7">{{$page->subtitle}}</h1>
            
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;">
        <img src="{{asset('storage/'.$page->image)}}" height="50px" alt="" />
    </figure>
</section>
<!-- /section -->

<section class="wrapper bg-gray">
    <div class="container pt-12 pt-md-16">
        <div class="card shadow-none my-n15 my-lg-n17">
            <div class="card-body py-12 py-lg-14 px-lg-11 py-xl-16 px-xl-13">
                <!--akan di isi oleh content -->
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        
                        <!-- /.blog -->
                        <div class="blog grid grid-view">
                            <div class="row isotope gx-md-8 gy-8 mb-8">
                                @foreach ($blogs as $blog)
                                <article class="item post col-md-6">
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay1 hover-scale"><a href="{{route('article.show', $blog->slug)}}"> <img src="{{asset('storage/'.$blog->image)}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="{{route('article.show', $blog->slug)}}" class="hover" rel="category">{{$blog->categories->name}}</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('article.show', $blog->slug)}}">{{$blog->title}}</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                <!-- cara menampikan data teks dengan escape string dan limit string ke 100 -->
                                                {!! \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, $end='...')  !!}

                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$blog->created_at->format('d M Y')}}</span></li>
                                                
                                                <!-- <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                                <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li> -->
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                @endforeach
                               
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