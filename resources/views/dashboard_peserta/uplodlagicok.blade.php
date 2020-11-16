@extends('layouts.base')

@section('meta-title')
    Settings | Upload Bukti Pembayaran
@endsection

@section ('content')

<div class="settings">
    <div class="card card-xxl form-card settings__form-card">
        <div class="settings__sidebar">
            <ul class="link-item-wrapper">
                <li><a href="#" class="link-item text-regular">Account</a></li>
                <li><a href="#" class="link-item text-regular">Members</a></li>
                <li><a href="#" class="link-item text-regular link-item--active">Bukti Pembayaran</a></li>
                <li><a href="#" class="link-item text-regular">Upload Karya</a></li>
            </ul>
        </div>
        <div class="settings__content">
            <h3 class="heading-3 margin-bottom-s align-self-start text-black">Bukti Pembayaran</h3>

            <form action="#" class="form settings__form" method="#">
            @csrf

                <label for="file-upload" class="input input-file-label" accept=".jpg,.jpeg,.png,.pdf">Upload Pembayaran <span>+</span></label>
                <input type="file" placeholder="Upload Pembayaran" name="pembayaran" id="file-upload" required>

                <p class="text-regular text-left text-black margin-top-s">Bisa menghubungi contact person di bawah ini:</p>
                <p class="text-regular text-left text-black">01829172804710437</p>

                <input type="submit" class="button button--white align-self-end margin-top-auto" value="Update >"/>

            </form>
        </div>
        
        <img src="/assets/Rectangle 18.png" class="settings__geometry--square" alt="">
        <img src="/assets/Ellipse 10.png" class="settings__geometry--circle" alt="">
    </div>
</div>
@endsection