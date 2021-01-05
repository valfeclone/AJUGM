@extends('layouts.base')

@section('meta-title')
    Ajisaka | Members Settings
@endsection

@section ('content')

<div class="settings">
    <div class="card card-xxl form-card settings__form-card">
        <div class="settings__sidebar">
            <ul class="link-item-wrapper">
                <li><a href="/tim/update" class="link-item text-regular">Account</a></li>
                <li><a href="/tim/member" class="link-item text-regular link-item--active">Members</a></li>
                <li><a href="/tim/uploadbukti" class="link-item text-regular">Bukti Pembayaran</a></li>
                <li><a href="/tim/uploadkarya" class="link-item text-regular">Upload Karya</a></li>
            </ul>
        </div>
        <div class="settings__content">
            <h3 class="heading-3 margin-bottom-s text-black settings__heading">Members</h3>

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            
            <form action="/tim/member" class="form settings__form" method="POST" enctype="multipart/form-data">
            @csrf

            @foreach ($user->member as $members)
                <div class="register-detail-inputs" id="accordion">
                    <div class="collapsible">
                        <button class="collapsible__button collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$loop->index+1}}" aria-expanded="true" aria-controls="collapse{{$loop->index+1}}">
                            @if($loop->index == 0)
                                <p class="text-regular text-black">Team Leader</p>
                            @else
                                <p class="text-regular text-black">Member {{$loop->index+1}}</p>
                            @endif
                            <span class="collapsible__arrow"></span>
                        </button>
                        <div class="collapse" id="collapse{{$loop->index+1}}" data-parent="#accordion">
                            <input type="text" value="{{ $members->name }}" placeholder="Name" name="member-name-{{$loop->index+1}}" class="input width-60 no-symbols" required>
                            @error('member-name-{{$loop->index+1}}')
                                <span class="alert-text alert-text--failed" role="alert">
                                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            <input type="text" value="{{ $members->fakultas }}" placeholder="Faculty" name="member-faculty-{{$loop->index+1}}" class="input width-60 no-symbols" required>
                            @error('member-faculty-{{$loop->index+1}}')
                                <span class="alert-text alert-text--failed" role="alert">
                                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            <input type="text" value="{{ $members->jurusan }}" placeholder="Major" name="member-major-{{$loop->index+1}}" class="input width-60 no-symbols" required>
                            @error('member-major-{{$loop->index+1}}')
                                <span class="alert-text alert-text--failed" role="alert">
                                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            <label for="file-upload-{{$loop->index+1}}" class="input width-60 input-file-label" accept=".jpg,.jpeg,.png">{{$members->path_foto_ktm}}<span>+</span></label>                            
                            <input type="file" placeholder="Upload KTM" name="member-ktm-{{$loop->index+1}}" class="ktm" id="file-upload-{{$loop->index+1}}">
                            @error('member-ktm-{{$loop->index+1}}')
                                <span class="alert-text alert-text--failed" role="alert">
                                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="email" value="{{ $members->email }}" placeholder="E-mail" name="member-email-{{$loop->index+1}}" class="input width-60" required>
                            @error('member-email-{{$loop->index+1}}')
                                <span class="alert-text alert-text--failed" role="alert">
                                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            <input type="text" value="{{ $members->linkedin }}" placeholder="Linked In" name="member-linkedin-{{$loop->index+1}}" class="input width-60 linkedin">
                            @error('member-linkedin-{{$loop->index+1}}')
                                <span class="alert-text alert-text--failed" role="alert">
                                    <i class="fas fa-exclamation-circle fa-lg margin-right-xs" aria-hidden="true"></i>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            @endforeach

                <!-- <button id="addTeamMember" type="button" class="button button--white button--borderless align-self-start margin-top-s">Add Member +</button> -->

                <input type="submit" class="button button--white" value="Update >"/>

            </form>
        </div>

        <img src="/assets/Rectangle 18.png" class="settings__geometry--square" alt="">
        <img src="/assets/Ellipse 10.png" class="settings__geometry--circle" alt="">
    </div>
</div>
@endsection