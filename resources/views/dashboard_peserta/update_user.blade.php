@extends('layouts.base')

@section('meta-title')
    Settings | Account
@endsection

@section ('content')

<div class="settings">
    <div class="card card-xxl form-card settings__form-card">
        <div class="settings__sidebar">
            <ul class="link-item-wrapper">
                <li><a href="#" class="link-item text-regular link-item--active">Account</a></li>
                <li><a href="#" class="link-item text-regular">Members</a></li>
                <li><a href="#" class="link-item text-regular">Bukti Pembayaran</a></li>
                <li><a href="#" class="link-item text-regular">Upload Karya</a></li>
            </ul>
        </div>
        <div class="settings__content">
            <h3 class="heading-3 margin-bottom-s align-self-start text-black">Account</h3>

            <form action="#" class="form settings__form" method="#">
            @csrf

                <input type="text" placeholder="Team Name" name="team-name" class="input" required autofocus>

                <input type="email" placeholder="E-mail" name="email" class="input margin-top-xs" required autofocus>

                <input type="text" placeholder="University" name="university" class="input margin-top-xs" required autofocus>

                <div class="select-wrapper margin-top-xs">
                    <div class="select">
                        <div class="select__trigger"><span>Competition</span>
                            <div class="arrow"></div>
                        </div>
                        <div class="select-options">
                            <span class="select-option" data-value="Homeless Media">Homeless Media</span>
                            <span class="select-option" data-value="Comic Strip">Comic Strip</span>
                            <span class="select-option" data-value="Podcast">Podcast</span>
                            <span class="select-option" data-value="Film Fiksi">Film Fiksi</span>
                            <span class="select-option" data-value="Movie Scoring">Movie Scoring</span>
                            <span class="select-option" data-value="Film Dokumenter">Film Dokumenter</span>
                            <span class="select-option" data-value="Penulisan Naskah">Penulisan Naskah</span>
                            <span class="select-option" data-value="PR Campaign">PR Campaign</span>
                            <span class="select-option" data-value="Press Conference">Press Conference</span>
                            <span class="select-option" data-value="Risk Management">Risk Management</span>
                            <span class="select-option" data-value="Riset Strategis Akademik">Riset Strategis Akademik</span>
                            <span class="select-option" data-value="Fun Research">Fun Research</span>
                            <span class="select-option" data-value="Social Media Activation">Social Media Activation</span>
                            <span class="select-option" data-value="Unconventional Media">Unconventional Media</span>
                            <span class="select-option" data-value="Brandbook">Brandbook</span>
                            <span class="select-option" data-value="Skip Ad">Skip Ad</span>

                        </div>
                    </div>
                </div>

                <input type="password" placeholder="Password" name="password" class="input margin-top-xs margin-bottom-s" required autofocus>

                <p class="status text-regular text-black">Paid / Belum Verifikasi</p>

                <input type="submit" class="button button--white align-self-end margin-top-auto" value="Update >"/>

            </form>
        </div>
        
        <img src="/assets/Rectangle 18.png" class="settings__geometry--square" alt="">
        <img src="/assets/Ellipse 10.png" class="settings__geometry--circle" alt="">
    </div>
</div>
@endsection