@extends('body')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hallo</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('blog.index')}}">Blog</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Blog Create</li>
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
                    <h4 class="card-title">Create Blog</h4>
                    <form class="mt-4" method="post" action="{{route('blog.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="mr-sm-2" for="categories_id">Category</label>
                            <select class="form-control custom-select mr-sm-2" id="categories_id" name="categories_id">
                                <option value=" ">Choose...</option>
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <span class="invalid-feedback">{{$errors->first('categories_id')}}</span>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="tags_id">Tags</label>
                            <select class="form-control multiple-select mr-sm-2" id="tags_id" name="tags_id[]" multiple="multiple">
                                <option value=" ">Choose...</option>
                                @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>                         
                            <span class="invalid-feedback">{{$errors->first('tags_id')}}</span>
                        </div>

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


                        <div class="form-group mb-4">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control tinymce {{ $errors->first('content') ? 'is-invalid' : '' }}">{{old('content')}}</textarea>
                            <span class="invalid-feedback">{{$errors->first('content')}}</span>
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