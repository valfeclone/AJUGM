@extends('layouts.base')

@section('meta-title')
    Ajisaka | Upload Karya
@endsection

@section ('content')

<div class="settings">
    <div class="card card-xxl form-card settings__form-card">
        <div class="settings__sidebar">
            <ul class="link-item-wrapper">
                <li><a href="/tim/update" class="link-item text-regular">Account</a></li>
                <li><a href="/tim/member" class="link-item text-regular">Members</a></li>
                <li><a href="/tim/uploadbukti" class="link-item text-regular">Bukti Pembayaran</a></li>
                <li><a href="/tim/uploadkarya" class="link-item text-regular link-item--active">Upload Karya</a></li>
            </ul>
        </div>
        <div class="settings__content">
            <h3 class="heading-3 margin-bottom-s settings__heading text-black">Upload Karya</h3>

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            
            @if ($user->validasi_pembayaran == true)
                @if ($user->kategori !== "Skip Ad" and $user->kategori !== "Film Dokumenter" and $user->kategori !== "Film Fiksi")
                    <form action="/tim/uploadkarya" class="form settings__form" method="POST" enctype="multipart/form-data">
                        @csrf

                        <label for="file-upload" class="input input-file-label">Upload Karya <span>+</span></label>
                        <input type="file" placeholder="Upload Karya" name="file_lomba" id="file-upload" accept=".jpg,.jpeg,.png,.rar,.zip,.pdf" required>

                        @error('file_lomba')
                            <span class="alert-text alert-text--failed" role="alert">
                                <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!-- <input type="text" placeholder="Deskripsi Karya" name="deskripsi-karya" class="input margin-top-xs" required> -->

                        <label for="file-upup" class="input input-file-label margin-top-xs">Upload File Pendukung <span>+</span></label>
                        <input type="file" placeholder="Upload File Pendukung" name="file-pendukung" id="file-upup" accept=".jpg,.jpeg,.png,.rar,.zip,.pdf" required>
                        @error('file-pendukung')
                            <span class="alert-text alert-text--failed" role="alert">
                                <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input type="submit" class="button button--white" value="Update >"/>

                    </form>
                @else
                    <form action="/tim/uploadlink/proses" class="form settings__form" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="text" class="input input-file-label" placeholder="Link Google Drive Karya" name="file_lomba" id="file-upload"  required>

                        <label for="file-upup" class="input input-file-label margin-top-xs">Upload File Pendukung <span>+</span></label>
                        <input type="file" placeholder="Upload File Pendukung" name="file-pendukung" id="file-upup" accept=".jpg,.jpeg,.png,.rar,.zip,.pdf">

                        <input type="submit" class="button button--white align-self-end margin-top-auto" value="Update >"/>

                    </form>
                @endif
            @else
                <p>
                Maaf kamu belum bisa mengupload file. Silahkan upload bukti pembayaran terlebih dahulu atau menunggu verifikasi admin.
                </p>
            @endif

        </div>

        <img src="/assets/Rectangle 18.png" class="settings__geometry--square" alt="">
        <img src="/assets/Ellipse 10.png" class="settings__geometry--circle" alt="">
    </div>
</div>
@endsection