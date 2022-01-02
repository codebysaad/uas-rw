<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <button wire:click="create()" class="btn btn-success mb-3">Tambah Pegawai</button>
            @if($isModalOpen)
            @include('livewire.create')
            @endif
            <div class="table-responsive">
                <table class="table-fixed w-full scroll">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">No.</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">NIP</th>
                            <th class="px-4 py-2">Pangkat</th>
                            <th class="px-4 py-2">Jabatan</th>
                            <th class="px-4 py-2">No. Rekening</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pegawais as $pegawai)
                        <tr>
                            <td class="border px-4 py-2">{{ $pegawai->id }}</td>
                            <td class="border px-4 py-2">{{ $pegawai->nama }}</td>
                            <td class="border px-4 py-2">{{ $pegawai->nip }}</td>
                            <td class="border px-4 py-2">{{ $pegawai->pangkat }}</td>
                            <td class="border px-4 py-2">{{ $pegawai->jabatan }}</td>
                            <td class="border px-4 py-2">{{ $pegawai->norek }}</td>
                            <td class="border px-4 py-2">{{ $pegawai->email }}</td>
                            <td class="border px-4 py-2">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button wire:click="edit({{ $pegawai->id }})"
                                        class="btn btn-warning btn-sm text-white font-bold py-2 px-4 rounded">Edit</button>
                                    <button wire:click="delete({{ $pegawai->id }})"
                                        class="btn btn-danger btn-sm text-white font-bold py-2 px-4 rounded">Delete</button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="8">Tidak ada data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>