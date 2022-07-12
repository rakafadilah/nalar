@extends('body')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hallo</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Blog</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Blog Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Blog</h4>
                    <form class="mt-4" method="post" action="{{route('blog.update', $blog->id)}}">
                        @csrf
                        <!-- masukan method put dalam form hidden untuk update data -->
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" id="title" name="title" class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}" value="{{$blog->title ?: old('title')}}" required>
                            <span class="invalid-feedback">{{$errors->first('title')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Description</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control {{ $errors->first('deskripsi') ? 'is-invalid' : '' }}">{{$cat->deskripsi ?: old('deskripsi')}}</textarea>
                            <span class="invalid-feedback">{{$errors->first('deskripsi')}}</span>
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