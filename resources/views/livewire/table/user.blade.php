
<div>
    <x-data-table :data="$data" :model="$users">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID Tim
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                    Nama Tim
                    @include('components.sort-icon', ['field' => 'name'])
                </a></th>
                <th><a wire:click.prevent="sortBy('kategori_lomba')" role="button" href="#">
                    Kategori Lomba
                    @include('components.sort-icon', ['field' => 'kategori_lomba'])
                </a></th>
                <th><a wire:click.prevent="sortBy('lomba')" role="button" href="#">
                    Lomba
                    @include('components.sort-icon', ['field' => 'Lomba'])
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
                <th><a wire:click.prevent="sortBy('path_file_lomba')" role="button" href="#">
                    Status Pembayaran
                    @include('components.sort-icon', ['field' => 'validasi_pembayaran'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($users as $user)
                <tr x-data="window.__controller.dataTableController({{ $user->id }})">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->kategori_lomba }}</td>
                    <td>{{ $user->lomba }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <?php if($user->path_bukti_bayar): ?>
                            <a href="/images/bukti/{{ $user->path_bukti_bayar }}" download>Click to view</a>
                        <?php else: ?>
                            belum tersedia
                        <?php endif; ?>
                    </td>
                    <td>
                        @if ($user->path_file_lomba)
                            @if ($user->lomba !== "Skip Ad" and $user->lomba !== "Film Dokumenter" and $user->lomba !== "Film Fiksi")
                                <a href="/images/filelomba/{{ $user->path_file_lomba }}" download>Click to view</a>
                            @else
                            <!-- Harus pake https:// -->
                                <a href="{{ $user->path_file_lomba }}" target="_blank">Click to open file link</a>
                            @endif
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
                    <td>{{ $user->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        @if ($user->path_bukti_bayar)
                            @if ($user->validasi_pembayaran == false)
                                <a role="button" href="{{ route('verifikasi_pembayaran',[$user->id]) }}" class="mr-3"><i class="fa fa-16px fa-check text-green-500" ></i></a>
                            @endif
                        @endif
                        <a role="button" href="/user/edit/{{ $user->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>