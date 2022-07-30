@extends('body')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hallo</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('image.index')}}">Image</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Image Create</li>
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
                    <h4 class="card-title">Create Image</h4>
                    <form class="mt-4" method="post" action="{{route('image.store')}}" enctype="multipart/form-data">
                        @csrf
                
                        <div class="form-group mb-4">
                            <label for="title">title</label>
                            <input type="text" id="title" name="title" class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}" value="{{old('title')}}" required>
                            <span class="invalid-feedback">{{$errors->first('title')}}</span>
                        </div>

          
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <span class="text-muted">Image yang diupload berukuran 1080x1350</span>
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