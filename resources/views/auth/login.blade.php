@extends('layouts.base')

@section('meta-title')
    Login
@endsection

@section ('content')

<div class="login">
    <div class="card card-xl form-card login__form-card">
        <h3 class="subheading text-grey text-uppercase margin-bottom-l align-self-start">Login</h3>

        <form action="{{ route('login') }}" class="form" method="POST">
        @csrf

            <input type="email" placeholder="E-mail" name="email" class="input" required autofocus>

            <input type="password" placeholder="Password" name="password" class="input margin-bottom-xs" required autofocus>

            <a href="{{ route('password.request') }}" class="link"><p class="text-regular margin-bottom-l">forgot password?</p></a>

            <input type="submit" class="button button--white align-self-center margin-bottom-xs" value="Login >">
        </form>
        <a href="/register" class="link align-self-center"><p class="text-regular text-black">Register .</p></a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <img src="/assets/Ellipse 11.png" alt="" class="login__geometry--circle">
        <img src="/assets/Group 75.png" alt="" class="login__geometry--wave">
    </div>
</div>
@endsection