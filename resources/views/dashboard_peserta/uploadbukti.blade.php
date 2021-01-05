@extends('layouts.base')

@section('meta-title')
    Ajisaka | Upload Bukti Pembayaran
@endsection

@section ('content')

<div class="settings">
    <div class="card card-xxl form-card settings__form-card">
        <div class="settings__sidebar">
            <ul class="link-item-wrapper">
                <li><a href="/tim/update" class="link-item text-regular">Account</a></li>
                <li><a href="/tim/member" class="link-item text-regular">Members</a></li>
                <li><a href="/tim/uploadbukti" class="link-item text-regular link-item--active">Bukti Pembayaran</a></li>
                <li><a href="/tim/uploadkarya" class="link-item text-regular">Upload Karya</a></li>
            </ul>
        </div>
        <div class="settings__content">
            <h3 class="heading-3 margin-bottom-s settings__heading text-black">Bukti Pembayaran</h3>

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

            @if ($user->validasi_pembayaran == false)
                <form action="/tim/uploadbukti" class="form settings__form" method="POST" enctype="multipart/form-data">
                @csrf

                    <label for="file-upload" class="input input-file-label" accept=".jpg,.jpeg,.png,.pdf">Upload Pembayaran <span>+</span></label>
                    <input type="file" placeholder="Upload Pembayaran" name="file_bukti_pembayaran" id="file-upload" required>

                    @error('file_bukti_pembayaran')
                        <span class="alert-text alert-text--failed" role="alert">
                            <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <p class="text-regular text-left text-black margin-top-s" >Untuk pembayaran bisa dilakukan dengan cara mentransfer ke akun dibawah ini :</p>
                    <br>
                    <p class="text-regular text-left text-black">059001019819504
                    <br>
                    BRI / a.n Ni Kadek Ayu Pratiwi
                    <br><br>
                    Harap menuliskan keterangan transaksi sebagai berikut: Nama Tim - Ajisaka
                    </p>

                    <input type="submit" class="button button--white" value="Update >"/>

                </form>
            @else
                <label for="file-upload" class="input input-file-label" accept=".jpg,.jpeg,.png,.pdf">{{$user->path_bukti_bayar}}</label>
                
                <p class="text-regular text-left text-black margin-top-s" >Akun tim ini sudah terverifikasi</p>
                
            @endif
        </div>

        <img src="/assets/Rectangle 18.png" class="settings__geometry--square" alt="">
        <img src="/assets/Ellipse 10.png" class="settings__geometry--circle" alt="">
    </div>
</div>
@endsection