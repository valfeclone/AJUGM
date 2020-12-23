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
            <h3 class="heading-3 margin-bottom-s align-self-start text-black">Bukti Pembayaran</h3>

            <form action="/tim/uploadbukti" class="form settings__form" method="POST" enctype="multipart/form-data">
            @csrf

                <label for="file-upload" class="input input-file-label" accept=".jpg,.jpeg,.png,.pdf">Upload Pembayaran <span>+</span></label>
                <input type="file" placeholder="Upload Pembayaran" name="file_bukti_pembayaran" id="file-upload" required>

                <p class="text-regular text-left text-black margin-top-s" >Untuk pembayaran bisa dilakukan dengan cara mentransfer ke akun dibawah ini :</p>
                <br>
                <p class="text-regular text-left text-black">059001019819504
                <br>
                BRI / a.n Ni Kadek Ayu Pratiwi
                <br><br>
                Harap menuliskan keterangan transaksi sebagai berikut: Nama Tim - Ajisaka
                </p>

                <input type="submit" class="button button--white align-self-end margin-top-auto" value="Update >"/>

            </form>
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