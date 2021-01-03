
<div>
    <x-data-table :data="$data" :model="$users">
        <x-slot name="head">
            <tr>
                <!-- <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID Tim
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th> -->
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                    Nama Tim
                    @include('components.sort-icon', ['field' => 'name'])
                </a></th>
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                    Universitas
                    @include('components.sort-icon', ['field' => 'universitas'])
                </a></th>
                <th><a wire:click.prevent="sortBy('kompetisi')" role="button" href="#">
                    Kompetisi
                    @include('components.sort-icon', ['field' => 'kompetisi'])
                </a></th>
                <th><a wire:click.prevent="sortBy('kategori')" role="button" href="#">
                    Kategori
                    @include('components.sort-icon', ['field' => 'kategori'])
                </a></th>
                <th><a wire:click.prevent="sortBy('email')" role="button" href="#">
                    Email Ketua Tim
                    @include('components.sort-icon', ['field' => 'email'])
                </a></th>
                <th><a wire:click.prevent="sortBy('path_bukti_bayar')" role="button" href="#">
                    Bukti Pembayaran
                    @include('components.sort-icon', ['field' => 'path_bukti_pembayaran'])
                </a></th>
                <th><a wire:click.prevent="sortBy('path_file_lomba')" role="button" href="#">
                    File Lomba
                    @include('components.sort-icon', ['field' => 'path_file_lomba'])
                </a></th>
                <th><a wire:click.prevent="sortBy('path_file_pendukung')" role="button" href="#">
                    File Pendukung
                    @include('components.sort-icon', ['field' => 'path_file_pendukung'])
                </a></th>
                <th><a wire:click.prevent="sortBy('path_file_lomba')" role="button" href="#">
                    Status Pembayaran
                    @include('components.sort-icon', ['field' => 'validasi_pembayaran'])
                </a></th>
                <!-- <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th> -->
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($users as $user)
                <tr x-data="window.__controller.dataTableController({{ $user->id }})">
                    <!-- <td>{{ $user->id }}</td> -->
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->universitas }}</td>
                    <td>{{ $user->kompetisi }}</td>
                    <td>{{ $user->kategori }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->path_bukti_bayar)
                            <a href="/storage/bukti_pembayaran/{{ $user->path_bukti_bayar }}" download>Click to download</a>
                        @else
                            belum tersedia
                        @endif
                    </td>
                    <td>
                        @if ($user->path_file_lomba)
                            @if ($user->lomba == "Skip Ad" and $user->lomba == "Film Dokumenter" and $user->lomba == "Film Fiksi")
                                <a href="storage/file_lomba/{{ $user->path_file_lomba }}" download>Click to download</a>
                            @else
                            <!-- Harus pake https:// -->
                                <a href="{{ $user->path_file_lomba }}" target="_blank">Click to open file link</a>
                            @endif
                        @else
                            belum tersedia
                        @endif
                    </td>
                    <td>
                        @if ($user->path_file_pendukung)
                            <a href="storage/file_pendukung/{{ $user->path_file_pendukung }}" download>Click to download</a>
                        @else
                            belum tersedia
                        @endif
                    </td>
                    <td>
                        @if ($user->path_bukti_bayar)
                            @if ($user->validasi_pembayaran == true)
                                <p style="color:green">Sudah Diverifikasi</p>
                            @else
                                <p style="color:orange">Menunggu Verifikasi</p>
                            @endif
                        @else
                            <p style="color:red">Belum Tersedia</p>
                        @endif
                    </td>
                    <!-- <td>{{ $user->created_at->format('d M Y H:i') }}</td> -->
                    <td class="whitespace-no-wrap row-action--icon">
                        <form method="POST" action="/admin/verify/{{$user->id}}" class="fa fa-16px">
                            @csrf
                            @if ($user->path_bukti_bayar)
                                @if ($user->validasi_pembayaran == false)
                                    <button title="verifikasi pembayaran" type="submit"><i class="fa fa-16px fa-check text-green-500 mr-3" ></i></button>
                                @endif
                            @endif
                            <a role="button" title="edit tim" href="/user/edit/{{ $user->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                            <a role="button" title="hapus tim" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                        </form> 
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    @if (\Session::has('error'))
    <div class="alert alert-error">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif
</div>