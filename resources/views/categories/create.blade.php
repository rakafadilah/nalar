@extends('body')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hallo</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categories create</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Blog Categories Create</li>
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
                    <h4 class="card-title">Create Categories</h4>
                    <form class="mt-4" method="post" action="{{route('categories.store')}}">
                        @csrf        
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" id="name" name="name" class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}" value="{{old('name')}}" required>
                            <span class="invalid-feedback">{{$errors->first('name')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Description</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control {{ $errors->first('deskripsi') ? 'is-invalid' : '' }}">{{old('deskripsi')}}</textarea>
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