@extends('layouts.base')

@section('meta-title')
    Register
@endsection

@section ('content')
<div class="register">
    <form action="{{ route('register') }}" class="register__form">
        @csrf
        <div class="card card-xl form-card register-main-card">
            <h3 class="subheading text-grey text-uppercase margin-bottom-l align-self-start">Register</h3>

            <input type="text" placeholder="Team Name" name="name" class="input" required autofocus>

            <input type="text" placeholder="University" name="university" class="input" required>

            <div class="select-wrapper">
                <div class="select">
                    <div class="select__trigger"><span>Category</span>
                        <div class="arrow"></div>
                    </div>
                    <div class="select-options">
                        <span class="select-option" data-value="tesla">Tesla</span>
                        <span class="select-option" data-value="volvo">Volvo</span>
                        <span class="select-option" data-value="mercedes">Mercedes</span>
                    </div>
                </div>
            </div>

            <input type="email" placeholder="E-mail" name="email" class="input" required >

            <input type="password" placeholder="Password" name="password" class="input" required>

            <input type="password" placeholder="Re-Password" name="repassword" class="input margin-bottom-l" required>

            <button type="button" class="button button--white align-self-end margin-bottom-xs" id="nextStepButton">NEXT ></button>

            <img src="/assets/Rectangle 18.png" class="register__geometry--square" alt="">
        </div>

        <div class="card card-xl form-card register-detail-card">
            <div class="register-detail-inputs" id="accordion">
                <div class="collapsible">
                    <button class="collapsible__button collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        <p class="text-regular text-black">Team Leader</p>
                        <span class="collapsible__arrow"></span>
                    </button>
                    <div class="collapse" id="collapse1" data-parent="#accordion">
                        <input type="text" placeholder="Name" name="member-name-1" class="input width-60">
                        <input type="text" placeholder="Faculty" name="member-faculty-1" class="input width-60">
                        <input type="text" placeholder="Major" name="member-major-1" class="input width-60">
                        <label for="file-upload" class="input width-60 input-file-label" accept=".jpg,.jpeg,.png">Upload KTM</label>
                        <input type="file" placeholder="Upload KTM" name="member-ktm-1" id="file-upload">
                        <input type="email" placeholder="E-mail" name="member-email-1" class="input width-60">
                        <input type="text" placeholder="Linked In" name="member-linkedin-1" class="input width-60">
                    </div>
                </div>
            </div>

            <button id="addTeamMember" type="button" class="button button--white button--borderless align-self-start margin-top-s">Add Member +</button>

            <div class="register-detail-utilities">
                <input type="submit" class="button button--white margin-bottom-m" value="Register >">

                <p class="text-regular">Already have an account? <a href="#" class="link text-black">Login Here!</a></p>
            </div>

            <img src="/assets/Ellipse 10.png" class="register__geometry--circle" alt="">
        </div>
    </form>
</div>
@endsection