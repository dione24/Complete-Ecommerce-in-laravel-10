@extends('frontend.layouts.master')

@section('title','MD-SHOP || Connexion')

@section('main-content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Accueil<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="javascript:void(0);">Connexion</a></li>
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
                    <h2>Connexion</h2>
                    <p>Veuillez vous inscrire pour accélérer votre passage à la caisse</p>
                    <!-- Form -->
                    <form class="form" method="post" action="{{route('login.submit')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Votre e-mail<span>*</span></label>
                                    <input type="email" name="email" placeholder="" required="required"
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
                                <div class="form-group login-btn">
                                    <button class="btn btn-danger" type="submit">Se connecter</button>
                                    <a href="{{route('register.form')}}" class="btn">
                                        Pas encore de compte ? Inscription
                                    </a>
                                    {{-- OR
                                    <a href="{{route('login.redirect','facebook')}}" class="btn btn-facebook"><i
                                            class="ti-facebook"></i></a>
                                    <a href="{{route('login.redirect','github')}}" class="btn btn-github"><i
                                            class="ti-github"></i></a> --}}
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Se
                                        souvenir de moi</label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="lost-pass" href="{{ route('password.reset') }}">
                                    Mot de passe oublié ?
                                </a>
                                @endif
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

    .btn-danger {
        background: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background: #c82333 !important;
        color: white;
    }
</style>
@endpush