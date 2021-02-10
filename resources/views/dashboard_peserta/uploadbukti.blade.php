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
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="button button--white margin-top-s" data-toggle="modal" data-target="#exampleModal">
                        Price List >
                    </button>

                    <p class="text-regular text-left text-black margin-top-s" >Untuk pembayaran bisa dilakukan dengan cara mentransfer ke akun dibawah ini :</p>
                    <br>
                    <p class="text-regular text-left text-black margin-bottom-s">059001019819504
                    <br>
                    BRI / a.n Ni Kadek Ayu Pratiwi
                    <br><br>
                    Harap menuliskan keterangan transaksi sebagai berikut: Nama Tim - Ajisaka
                    <br><br>
                    Pembayaran dan verifikasi akan diproses pada sore hari. Brief lomba akan dikirimkan pada malam hari melalui surel team leader. Pembayaran setelah pukul 18.00 WIB akan diproses pada hari selanjutnya. 
                    <br><br> 
                    Apabila dalam waktu 1 x 24 jam akun belum terverifikasi, harap segera menghubungi panitia melalui OA Line @ajisakaugm
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content padding-m">
                <div class="modal-header">
                    <h5 class="modal-title heading-3 text-black py-m" id="exampleModalLabel">Price List Kompetisi Festival Ajisaka 2020+</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-regular">
                    <p class="text-regular text-black py-s">
                        Arjuna<br>
                        1. Comic Strip: 70.000<br>
                        2. Podcast: 120.000<br>
                        3. Homeless Media: 180.000<br>
                        <br>            
                        Kresna<br>
                        1. Film Fiksi Pendek: 200.000<br>
                        2. Film Dokumenter Pendek: 200.000<br>
                        3. Penulisan Naskah Film: 70.000<br>
                        4. Scoring Film: 160.000<br>
                        <br>
                        Nakula<br>
                        1. Riset Konvensional: 180.000<br>
                        2. Riset Fun: 180.000<br>
                        <br>        
                        Prahasta<br>
                        1. PR Campaign: 200.000<br>
                        2. Press Conference Simulation: 200.000<br>
                        3. Risk Management: 180.000<br>
                        <br>
                        Sadewa<br>
                        1. Brandbook: 120.000<br>
                        2. Skip Ad: 180.000<br>
                        3. Social Media Activation: 120.000<br>
                        4. Unconventional Media: 120.000<br>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button button--red margin-top-s" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection