@extends('layouts.base')

@section('meta-title')
    Register
@endsection
 
@section ('content')
<div class="register">
    <form method="POST" action="/register" class="register__form" id="theform" enctype="multipart/form-data">
        @csrf
        <div class="card card-xl form-card register-main-card">
            <h3 class="subheading text-grey text-uppercase margin-bottom-l align-self-start">Register</h3>

            <input type="text" placeholder="Team Name" name="name" class="input no-symbols" required autofocus>
            @error('name')
                <span class="alert-text alert-text--failed" role="alert">
                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="text" placeholder="University" name="universitas" class="input no-symbols" required>
            @error('universitas')
                <span class="alert-text alert-text--failed" role="alert">
                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <select class="select" id="select-cat" name="select-cat">
                <option value="" selected hidden>Kompetisi</option> 
                <option value="Arjuna">Arjuna (Ajang Citra Sejuta Warna)</option>
                <option value="Kresna">Kresna (Kreasi Insan Sinema)</option>
                <option value="Prahasta">Prahasta (Pertempuran Humas Nusantara)</option>
                <option value="Nakula">Nakula (Penelitian Kawula Muda)</option>
                <option value="Sadewa">Sadewa (Sayembara Dewa Pariwara)</option>
            </select>
            @error('select-cat')
                <span class="alert-text alert-text--failed" role="alert">
                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <select class="select" id="select-comp" name="select-opt">
                <option selected value="" hidden>Kategori</option> 
                <option disabled value="default">Please select the category first</option>
            </select>
            @error('select-opt')
                <span class="alert-text alert-text--failed" role="alert">
                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="email" placeholder="E-mail" name="email" class="input" required >
            @error('email')
                <span class="alert-text alert-text--failed" role="alert">
                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" placeholder="Password" name="password" class="input" id="password" required>
            @error('password')
                <span class="alert-text alert-text--failed" role="alert">
                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" placeholder="Re-Password" name="repassword" class="input margin-bottom-l" id="repassword" required>
            @error('repassword')
                <span class="alert-text alert-text--failed" role="alert">
                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @if (\Session::has('message'))
                <span class="alert-text alert-text--failed" role="alert">
                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                    <strong>{!! \Session::get('message') !!}</strong>
                </span>
            @endif
            @if ($errors->any())
                    <div class="alert-text alert-text--failed" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
                        <input type="text" placeholder="Name" name="member-name-1" class="input width-60 no-symbols" required>
                        <input type="text" placeholder="Faculty" name="member-faculty-1" class="input width-60 no-symbols" required>
                        <input type="text" placeholder="Major" name="member-major-1" class="input width-60 no-symbols" required>
                        <label for="file-upload-1" class="input width-60 input-file-label">Upload KTM <span>+</span></label>
                        <input type="file" placeholder="Upload KTM" name="member-ktm-1" id="file-upload-1" class="ktm" accept=".jpg,.jpeg,.png">
                        <input type="email" placeholder="Same as team E-Mail" name="member-email-1" class="input width-60" disabled>
                        <input type="text" placeholder="WA number" name="member-phonenumber-1" class="input width-60">
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