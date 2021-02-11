
<div>
    <x-data-table :data="$data" :model="$members">
        <x-slot name="head">
            <tr>
                <!-- <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID Member
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th> -->
                <th><a wire:click.prevent="sortBy('team_id')" role="button" href="#">
                    Nama Tim
                    @include('components.sort-icon', ['field' => 'team_id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                    Nama
                    @include('components.sort-icon', ['field' => 'name'])
                </a></th>
                <th><a wire:click.prevent="sortBy('fakultas')" role="button" href="#">
                    Fakultas
                    @include('components.sort-icon', ['field' => 'fakultas'])
                </a></th>
                <th><a wire:click.prevent="sortBy('jurusan')" role="button" href="#">
                Jurusan
                    @include('components.sort-icon', ['field' => 'jurusan'])
                </a></th>
                <th><a wire:click.prevent="sortBy('email')" role="button" href="#">
                    E-mail
                    @include('components.sort-icon', ['field' => 'email'])
                </a></th>
                <th><a wire:click.prevent="sortBy('phone_number')" role="button" href="#">
                    Phone Number
                    @include('components.sort-icon', ['field' => 'phone_number'])
                </a></th>
                <th><a wire:click.prevent="sortBy('path_foto_ktm')" role="button" href="#">
                    Foto KTM
                    @include('components.sort-icon', ['field' => 'path_foto_ktm'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($members as $member)
                <tr x-data="window.__controller.dataTableController({{ $member->id }})">
                    <td>{{ $member->user->name }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->fakultas }}</td>
                    <td>{{ $member->jurusan }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->phone_number }}</td>
                    <td>
                        @if ($member->phone_number)
                            <a href="storage/foto_ktm/{{ $member->path_foto_ktm }}">Click to view</a>
                        @else
                            foto ktm belum tersedia
                        @endif
                    </td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>