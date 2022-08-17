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
                                <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                    <div>
                                        <ul class="list-unstyled tag-list mb-0">
                                            <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill mb-0">{{$article->categories->name}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="mb-0 mb-md-2">
                                        <div class="dropdown share-dropdown btn-group">
                                            <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil uil-share-alt"></i> Share </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{$link['twitter']}}" target="_blank"><i class="uil uil-twitter"></i>Twitter</a>
                                                <a class="dropdown-item" href="{{$link['facebook']}}" target="_blank"><i class="uil uil-facebook-f"></i>Facebook</a>
                                                <a class="dropdown-item" href="{{$link['whatsapp']}}" target="_blank"><i class="uil uil-whatsapp"></i>Whatsapp</a>
                                            </div>
                                            <!--/.dropdown-menu -->
                                        </div>
                                        <!--/.share-dropdown -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.classic-view -->
                           
                           
                            <!-- /.author-info -->
                            
                            <!-- /.social -->
                            <hr />
                            <h3 class="mb-6">You Might Also Like</h3>
                            <div class="carousel owl-carousel blog grid-view mb-16" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "2"}}'>
                                @foreach($relates as $key => $relate)
                                <div class="item">
                                    <article>
                                        <figure class="overlay overlay1 hover-scale rounded mb-5"><a href="{{route('article.show', $relate->slug)}}"> <img src="{{asset('storage/'.$relate->image)}}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="{{route('article.show', $relate->slug)}}" class="hover" rel="category">{{$relate->categories->name}}</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('article.show', $relate->slug)}}">{{$relate->title}}</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$relate->created_at->format('d M Y')}}</span></li>
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