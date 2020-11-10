<div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="/detailcok">Akun Tim</a></div>
    <div class="breadcrumb-item active"><a href="/tim/member">Member Tim</a></div>
    <div class="breadcrumb-item active"><a href="/tim/update">Update Tim</a></div>
    <div class="breadcrumb-item"><a href="/uplodcok">Upload File</a></div>
    <div class="breadcrumb-item"><a href="/uplodlagicok">Upload Bukti</div>
</div>
<form method="POST" action="{{ route('logout') }}">
    @csrf  
    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();this.closest('form').submit();">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
</form>