@extends('layouts.base')

@section('meta-title')
    Login
@endsection

@section ('content')
 
<div class="login">
    <div class="card card-xl login__form-card">
        <h3 class="subheading text-grey text-uppercase margin-bottom-l align-self-start">Login</h3>

        <form action="{{ route('login') }}" class="form" method="POST">
        @csrf

            <input type="email" placeholder="E-mail" name="email" class="input" required autofocus>

            @error('email')
                <span class="alert-text alert-text--failed" role="alert">
                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" placeholder="Password" name="password" class="input margin-bottom-xs" required autofocus>

            @error('password')
                <span class="alert-text alert-text--failed" role="alert">
                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <a href="{{ route('password.request') }}" class="link"><p class="text-regular margin-bottom-l">forgot password?</p></a>
            <input type="submit" class="button button--white align-self-center margin-top-l margin-bottom-xs" value="Login >">
        </form>
        <div class="align-self-center">
            <a href="/register" class="link"><p class="text-regular text-black">Register .</p></a>
        </div>

        <img src="/assets/Ellipse 11.png" alt="" class="login__geometry--circle">
        <img src="/assets/Group 75.png" alt="" class="login__geometry--wave">
    </div>
</div>
@endsection