@extends('auth.body.main')

@section('container')
<div class="row align-items-center justify-content-center height-self-center">
    <div class="col-lg-8">
        <div class="card auth-card">
            <div class="card-body p-0">
                <div class="col-lg-12" style="text-align:center;padding:10px;">
                    <img style="width:100px;" src="{{ asset('aslan-logo.png') }}" alt="" srcset="">
                </div>
                <div class="d-flex align-items-center auth-content">
                    <div class="col-lg-7 align-self-center">
                        <div class="p-3">

                            <h2 class="mb-2">Log In</h2>
                            <p>Login to stay connected.</p>

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control @error('email') is-invalid @enderror @error('username') is-invalid @enderror" type="text" name="input_type" placeholder=" " value="{{ old('input_type') }}" autocomplete="off" required autofocus>
                                            <label>Email/Username</label>
                                        </div>
                                        @error('username')
                                        <div class="mb-4" style="margin-top: -20px">
                                            <div class="text-danger small">Incorrect username or password.</div>
                                        </div>
                                        @enderror
                                        @error('email')
                                        <div class="mb-4" style="margin-top: -20px">
                                            <div class="text-danger small">Incorrect username or password.</div>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control @error('email') is-invalid @enderror @error('username') is-invalid @enderror" type="password" name="password" placeholder=" " required>
                                            <label>Password</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <div class="g-recaptcha" data-sitekey="6LeYAc8oAAAAALz6rKxrBzA547gfsVVfhlUEvA_d"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        Not a Member yet? <br> 
                                        <p >
                                            <a href="{{ route('register') }}" class="text-primary">Register</a> || 
                                            <a href="#" class="text-primary ">Forgot Password?</a>
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        ------------- OR --------------
                                    </div>

                                    <div class="col-lg-12 ">
                                        Login with other social medias <br>
                                        <a href="/auth/google" class="">
                                            <img style="width:50px;height:50px;" src="{{ asset('3d-icon/3d-icon-gmail.png') }}" alt="">
                                        </a>
                                        <a href="/auth/github" class="">
                                            <img style="width:40px;height:40px;" src="{{ asset('3d-icon/3d-icon-github.png') }}" alt="">
                                        </a>
                                        <a href="/auth/facebook" class="">
                                            <img style="width:50px;height:50px;" src="{{ asset('3d-icon/3d-icon-facebook.png') }}" alt="">
                                        </a>
                                        <a href="/auth/twitter" class="">
                                            <img style="width:60px;height:60px;" src="{{ asset('3d-icon/3d-icon-twitter.png') }}" alt="">
                                        </a>
                                        <a href="/auth/discord" class="">
                                            <img style="width:50px;height:50px;" src="{{ asset('3d-icon/3d-icon-discord.png') }}" alt="">
                                        </a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 content-right">
                        <img src="{{ asset('assets/images/login/01.png') }}" class="img-fluid image-right" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
