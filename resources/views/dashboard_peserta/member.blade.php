@extends('layouts.base')

@section('meta-title')
    Settings | Member
@endsection

@section ('content')

<div class="settings">
    <div class="card card-xxl form-card settings__form-card">
        <div class="settings__sidebar">
            <ul class="link-item-wrapper">
                <li><a href="#" class="link-item text-regular">Account</a></li>
                <li><a href="#" class="link-item text-regular link-item--active">Members</a></li>
                <li><a href="#" class="link-item text-regular">Bukti Pembayaran</a></li>
                <li><a href="#" class="link-item text-regular">Upload Karya</a></li>
            </ul>
        </div>
        <div class="settings__content">
            <h3 class="heading-3 margin-bottom-s align-self-start text-black">Members</h3>

            <form action="#" class="form settings__form" method="#">
            @csrf

                <div class="register-detail-inputs" id="accordion">
                    <div class="collapsible">
                        <button class="collapsible__button collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            <p class="text-regular text-black">Team Leader</p>
                            <span class="collapsible__arrow"></span>
                        </button>
                        <div class="collapse" id="collapse1" data-parent="#accordion">
                            <input type="text" placeholder="Name" name="member-name-1" class="input width-60" required>
                            <input type="text" placeholder="Faculty" name="member-faculty-1" class="input width-60" required>
                            <input type="text" placeholder="Major" name="member-major-1" class="input width-60" required>
                            <label for="file-upload-1" class="input width-60 input-file-label" accept=".jpg,.jpeg,.png">Upload KTM <span>+</span></label>
                            <input type="file" placeholder="Upload KTM" name="member-ktm-1" id="file-upload-1" required>
                            <input type="email" placeholder="E-mail" name="member-email-1" class="input width-60" required>
                            <input type="text" placeholder="Linked In" name="member-linkedin-1" class="input width-60" required>
                        </div>
                    </div>
                </div>

                <button id="addTeamMember" type="button" class="button button--white button--borderless align-self-start margin-top-s">Add Member +</button>

                <input type="submit" class="button button--white align-self-end margin-top-auto" value="Update >"/>

            </form>
        </div>
        
        <img src="/assets/Rectangle 18.png" class="settings__geometry--square" alt="">
        <img src="/assets/Ellipse 10.png" class="settings__geometry--circle" alt="">
    </div>
</div>
@endsection