<div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="/akun">Akun Tim</a></div>
    <div class="breadcrumb-item active"><a href="#">Member Tim</a></div>
    <div class="breadcrumb-item"><a href="/uploadfile">Upload File</a></div>
    <div class="breadcrumb-item"><a href="/uploadbukti">Upload Bukti</div>
</div>
<form method="POST" action="{{ route('logout') }}">
    @csrf  
    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();this.closest('form').submit();">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
</form>