@extends('layouts.base')

@section('meta-title')
    Settings | Account
@endsection

@section ('content')

<div class="settings">
    <div class="card card-xxl settings__form-card">
        <div class="settings__sidebar">
            <ul class="link-item-wrapper">
                <li><a href="/tim/update" class="link-item text-regular link-item--active">Account</a></li>
                <li><a href="/tim/member" class="link-item text-regular">Members</a></li>
                <li><a href="/tim/uploadbukti" class="link-item text-regular">Bukti Pembayaran</a></li>
                <li><a href="/tim/uploadkarya" class="link-item text-regular">Upload Karya</a></li>
            </ul>
        </div>
        <div class="settings__content">
            <h3 class="heading-3 margin-bottom-s align-self-start text-black">Account</h3>

            <form action="/tim/update" class="form settings__form" method="POST">
                @csrf
                @if ($user->validasi_pembayaran == false)
                    <input type="text" value="{{$user->name}}" placeholder="Nama Tim" name="name" class="input no-symbols" required autofocus>

                    <input type="email" value="{{$user->email}}" placeholder="Email Tim" name="email" class="input margin-top-xs" required autofocus>

                    <input type="text" value="{{$user->universitas}}" placeholder="Universitas" name="universitas" class="input margin-top-xs no-symbols" required autofocus>

                    <select class="select margin-top-xs" name="select-comp">
                        <option value="Homeless Media">Homeless Media</option>
                        <option value="Comic Strip">Comic Strip</option>
                        <option value="Podcast">Podcast</option>
                        <option value="Film Fiksi">Film Fiksi</option>
                        <option value="Movie Scoring">Movie Scoring</option>
                        <option value="Film Dokumenter">Film Dokumenter</option>
                        <option value="Penulisan Naskah">Penulisan Naskah</option>
                        <option value="PR Campaign">PR Campaign</option>
                        <option value="Press Conference">Press Conference</option>
                        <option value="Risk Management">Risk Management</option>
                        <option value="Riset Strategis Akademik">Riset Strategis Akademik</option>
                        <option value="Fun Research">Fun Research</option>
                        <option value="Social Media Activation">Social Media Activation</option>
                        <option value="Unconventional Media">Unconventional Media</option>
                        <option value="Brandbook">Brandbook</option>
                        <option value="Skip Ad">Skip Ad</option>
                    </select>

                    <input type="password" placeholder="Password" name="password" id="password" class="input margin-top-xs margin-bottom-s" autofocus>

                    @if($user->path_bukti_bayar)
                        @if($user->validasi_pembayaran == true)
                            <p class="status text-regular text-black">Sudah Verifikasi</p>
                        @else
                            <p class="status text-regular text-black">Paid / Belum Verifikasi</p>
                        @endif
                    @else
                        <p class="status text-regular text-black">Belum Membayar</p>
                    @endif

                    <input type="submit" class="button button--white align-self-end margin-top-auto" value="Update >"/>

                @else
                    <input type="text" value="{{$user->name}}" placeholder="Nama Tim" name="name" class="input no-symbols" required autofocus disabled>

                    <input type="email" value="{{$user->email}}" placeholder="Email Tim" name="email" class="input margin-top-xs" required autofocus disabled>

                    <input type="text" value="{{$user->universitas}}" placeholder="Universitas" name="universitas" class="input margin-top-xs no-symbols" required autofocus disabled>

                    <input type="text" value="{{$user->kategori}}" placeholder="Kategori" name="select-comp" class="input margin-top-xs no-symbols" required autofocus disabled>
                @endif
            </form>
<!-- 
            <form action="#" class="form settings__form" method="#">
            @csrf

                <input type="text" placeholder="Team Name" name="team-name" class="input" required autofocus>

                <input type="email" placeholder="E-mail" name="email" class="input margin-top-xs" required autofocus>

                <input type="text" placeholder="University" name="university" class="input margin-top-xs" required autofocus>

                <div class="select margin-top-xs">
                    <option value="Homeless Media">Homeless Media</option>
                    <option value="Comic Strip">Comic Strip</option>
                    <option value="Podcast">Podcast</option>
                    <option value="Film Fiksi">Film Fiksi</option>
                    <option value="Movie Scoring">Movie Scoring</option>
                    <option value="Film Dokumenter">Film Dokumenter</option>
                    <option value="Penulisan Naskah">Penulisan Naskah</option>
                    <option value="PR Campaign">PR Campaign</option>
                    <option value="Press Conference">Press Conference</option>
                    <option value="Risk Management">Risk Management</option>
                    <option value="Riset Strategis Akademik">Riset Strategis Akademik</option>
                    <option value="Fun Research">Fun Research</option>
                    <option value="Social Media Activation">Social Media Activation</option>
                    <option value="Unconventional Media">Unconventional Media</option>
                    <option value="Brandbook">Brandbook</option>
                    <option value="Skip Ad">Skip Ad</option>
                </div>

                <input type="password" placeholder="Password" name="password" class="input margin-top-xs margin-bottom-s" required autofocus>

                <p class="status text-regular text-black">Paid / Belum Verifikasi</p>

                <input type="submit" class="button button--white align-self-end margin-top-auto" value="Update >"/>

            </form> -->
        </div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <img src="/assets/Rectangle 18.png" class="settings__geometry--square" alt="">
        <img src="/assets/Ellipse 10.png" class="settings__geometry--circle" alt="">
    </div>
</div>
@endsection