@extends('layouts.base')

@section('meta-title')
    Settings | Upload Karya
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
            <h3 class="heading-3 margin-bottom-s align-self-start text-black">Upload Karya</h3>

            @if ($kategori !== "Skip Ad" and $kategori !== "Film Dokumenter" and $kategori !== "Film Fiksi")
                <form action="/tim/uploadkarya" class="form settings__form" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="file-upload" class="input input-file-label">Upload Karya <span>+</span></label>
                    <input type="file" placeholder="Upload Karya" name="file_lomba" id="file-upload" accept=".jpg,.jpeg,.png,.rar,.zip,.pdf" required>

                    <input type="text" placeholder="Deskripsi Karya" name="deskripsi-karya" class="input margin-top-xs" required>

                    <label for="file-upload" class="input input-file-label margin-top-xs">Upload File Pendukung <span>+</span></label>
                    <input type="file" placeholder="Upload File Pendukung" name="file-pendukung" id="file-upload" accept=".jpg,.jpeg,.png,.rar,.zip,.pdf" required>

                    <input type="submit" class="button button--white align-self-end margin-top-auto" value="Update >"/>

                </form>
            @else
                <form action="/tim/uploadlink/proses" class="form settings__form" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="file-upload" class="input input-file-label">Upload Karya <span>+</span></label>
                    <input type="text" placeholder="Upload Karya" name="link_file_lomba" id="file-upload" required>

                    <input type="text" placeholder="Deskripsi Karya" name="deskripsi-karya" class="input margin-top-xs" required>

                    <!-- <label for="file-upload" class="input input-file-label margin-top-xs">Upload File Pendukung <span>+</span></label>
                    <input type="file" placeholder="Upload File Pendukung" name="file-pendukung" id="file-upload" accept=".jpg,.jpeg,.png,.rar,.zip,.pdf" required> -->

                    <input type="submit" class="button button--white align-self-end margin-top-auto" value="Update >"/>

                </form>
            @endif

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