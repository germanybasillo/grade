@extends('template.auth')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('validate_login') }}" method="post">
                @csrf
                <div class="_form-08-main">
                    <div class="_form-08-head">
                        <h2>Welcome Back</h2>
                        <a href="/"><p style="font-weight: bold">GS</p></a>
                    </div>

                    <div class="form-group">
                        <label>Enter Your Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="checkbox mb-0 form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Remember me
                            </label>
                        </div>
                        <a href="/register">Register Account</a>
                    </div>

                    <div class="form-group">
                        <div class="_btn_04">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>

                    <div class="sub-01">
                        <img src="assets/images/shap-02.png">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
 @endsection