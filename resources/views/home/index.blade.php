@extends('body')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hallo</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Homepage</a>
                        </li>
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
                    <h4 class="card-title">Homepage list</h4>
                    <div class="mb-3">
                        <a href="{{route('home.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-borderless v-middle no-wrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="font-14 font-weight-medium text-muted">No</th>
                                    <th class="font-14 font-weight-medium text-muted">Title</th>
                                    <th class="font-14 font-weight-medium text-muted">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- melakukan perulangan dalam blade tamplate menggunakan foreach -->
                                @foreach($homes as $key=>$home)
                                <tr>
                                    <td class="border-top-0 px-2 py-4">{{ $key+1 }}</td>
                                    <td class="border-top-0 px-2 py-4">{{ $home->title}}</td>
                                    <td class="border-top-0 px-2 py-4">

                                    <div class="popover-icon row">
                                            <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-itemb" 
                                            href="{{route('home.edit', $home->id)}}"><i class="fas fa-edit"></i>
                                            </a>
                                            <form onsubmit="return confirm('Delete this?')"
                                                 action="{{route('home.destroy', $home->id)}}"
                                                 method="post">
                                            @csrf  
                                                <input type="hidden" name="_method" value="delete">
                                                <button class="btn btn-danger rounded-circle btn-circle font-12 popover-item">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
