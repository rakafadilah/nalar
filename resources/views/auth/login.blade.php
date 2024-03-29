@extends('layouts.app')
@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" ;>
    <div class="auth-box row">
        <!-- <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(assets/images/big/3.jpg);">
        </div> -->
        <div class="col-lg-12 col-md-12 bg-white">
            <div class="p-3">
                <div class="text-center">
                    <img src="{{asset('img/nalar-logo.png')}}" height="50px" alt="wrapkit">
                </div>
                <h2 class="mt-3 text-center">Sign In</h2>
                <form class="mt-4" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="email">Email</label>
                                <input name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" type="email" placeholder="enter your email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="password">Password</label>
                                <input name="password" class="form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="enter your password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-block btn-dark">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection