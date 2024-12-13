@extends('frontend.layouts.master')

@section('title','MD-SHOP || Register Page')

@section('main-content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Accueil<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0);">Inscription</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Shop Login -->
<section class="shop login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="login-form">
                    <h2>Inscription</h2>
                    <p>Veuillez vous inscrire pour accélérer votre achat</p>
                    <!-- Form -->
                    <form class="form" method="post" action="{{route('register.submit')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Votre nom<span>*</span></label>
                                    <input type="text" name="name" placeholder="" required="required"
                                        value="{{old('name')}}">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Votre email<span>*</span></label>
                                    <input type="text" name="email" placeholder="" required="required"
                                        value="{{old('email')}}">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Votre mot de passe<span>*</span></label>
                                    <input type="password" name="password" placeholder="" required="required"
                                        value="{{old('password')}}">
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Confirmer votre mot de passe<span>*</span></label>
                                    <input type="password" name="password_confirmation" placeholder=""
                                        required="required" value="{{old('password_confirmation')}}">
                                    @error('password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group login-btn">
                                    <button class="btn btn-primary" type="submit">S'inscrire</button>
                                    <a href="{{route('login.form')}}" class="btn btn-login">Déjà un compte ? Se
                                        Connecter
                                    </a>
                                    {{-- OR --}}
                                    {{-- <a href="{{route('login.redirect','facebook')}}" class="btn btn-facebook"><i
                                            class="ti-facebook"></i></a>
                                    {{-- <a href="{{route('login.redirect','github')}}" class="btn btn-github"><i
                                            class="ti-github"></i></a> --}}
                                    {{-- <a href="{{route('login.redirect','google')}}" class="btn btn-google"><i
                                            class="ti-google"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Login -->
@endsection

@push('styles')
<style>
    .shop.login .form .btn {
        margin-right: 0;
    }

    .btn-facebook {
        background: #39579A;
    }

    .btn-facebook:hover {
        background: #073088 !important;
    }

    .btn-github {
        background: #444444;
        color: white;
    }

    .btn-github:hover {
        background: black !important;
    }

    .btn-google {
        background: #ea4335;
        color: white;
    }

    .btn-google:hover {
        background: rgb(243, 26, 26) !important;
    }

    .btn-login {
        background: #dc3545;
        color: white;
    }

    .btn-login:hover {
        background: #c82333;
        color: white;
    }
</style>
@endpush