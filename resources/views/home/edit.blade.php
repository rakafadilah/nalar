@extends('body')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hallo</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('home.index')}}">Homepage</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Homepage Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Homepage</h4>
                    <form class="mt-4" method="post" action="{{route('home.update', $homes->id)}}" enctype="multipart/form-data">
                        @csrf
                        <!-- masukan method put dalam form hidden untuk update data -->
                        <input type="hidden" name="_method" value="PUT">
                    
                        <div class="form-group mb-4">
                            <label for="title">title</label>
                            <input type="text" id="title" name="title" class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}" value="{{old('title') ?: $homes->title}}" required>
                            <span class="invalid-feedback">{{$errors->first('title')}}</span>
                        </div>

                        <div class="form-group mb-4">
                            <label for="subtitle">subtitle</label>
                            <input type="text" id="subtitle" name="subtitle" class="form-control {{ $errors->first('subtitle') ? 'is-invalid' : '' }}" value="{{old('subtitle') ?: $homes->subtitle}}" required>
                            <span class="invalid-feedback">{{$errors->first('subtitle')}}</span>
                        </div>

                        <div class="form-group mb-4">
                            <label for="title1">title 1</label>
                            <input type="text" id="title1" name="title1" class="form-control {{ $errors->first('title1') ? 'is-invalid' : '' }}" value="{{old('title1') ?: $homes->title1}}" required>
                            <span class="invalid-feedback">{{$errors->first('title1')}}</span>
                        </div>

                        <div class="form-group mb-4">
                            <label for="subtitle1">subtitle 1</label>
                            <input type="text" id="subtitle1" name="subtitle1" class="form-control {{ $errors->first('subtitle1') ? 'is-invalid' : '' }}" value="{{old('subtitle1') ?: $homes->subtitle1}}" required>
                            <span class="invalid-feedback">{{$errors->first('subtitle1')}}</span>
                        </div>

                        <div class="form-group mb-4">
                            <label for="title2">title 2</label>
                            <input type="text" id="title2" name="title2" class="form-control {{ $errors->first('title2') ? 'is-invalid' : '' }}" value="{{old('title2') ?: $homes->title2}}" required>
                            <span class="invalid-feedback">{{$errors->first('title2')}}</span>
                        </div>

                        <div class="form-group mb-4">
                            <label for="subtitle2">subtitle 2</label>
                            <input type="text" id="subtitle2" name="subtitle2" class="form-control {{ $errors->first('subtitle2') ? 'is-invalid' : '' }}" value="{{old('subtitle2') ?: $homes->subtitle2}}" required>
                            <span class="invalid-feedback">{{$errors->first('subtitle2')}}</span>
                        </div>

                        <div class="form-group mb-4">
                            <label for="title3">title 3</label>
                            <input type="text" id="title3" name="title3" class="form-control {{ $errors->first('title3') ? 'is-invalid' : '' }}" value="{{old('title3') ?: $homes->title3}}" required>
                            <span class="invalid-feedback">{{$errors->first('title3')}}</span>
                        </div>

                        <div class="form-group mb-4">
                            <label for="subtitle3">subtitle 3</label>
                            <input type="text" id="subtitle3" name="subtitle3" class="form-control {{ $errors->first('subtitle3') ? 'is-invalid' : '' }}" value="{{old('subtitle3') ?: $homes->subtitle3}}" required>
                            <span class="invalid-feedback">{{$errors->first('subtitle3')}}</span>
                        </div>

                        <div class="form-group mb-4">
                            @if($homes->image)
                            <div class="mb-3">
                                <img src="{{asset('storage/'.$homes->image)}}" width="100px">
                            </div>
                            @endif
                            <br>
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                            </div>
                            <span class="invalid-feedback">{{$errors->first('image')}}</span>
                        </div>

                        <div class="mb-3">
                            <span class="text-muted">Image yang diupload berukuran 2800x1000</span>
                        </div>


                      

                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-success btn-xs" value="Submit">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection