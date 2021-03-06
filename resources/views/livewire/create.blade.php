<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="nama"
                                class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="nama" placeholder="Masukkan Nama" wire:model="nama">
                            @error('nama') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="nip"
                                class="block text-gray-700 text-sm font-bold mb-2">NIP</label>
                            <input type="number"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="nip" placeholder="Masukkan NIP" wire:model="nip">
                            @error('nip') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="pangkat"
                                class="block text-gray-700 text-sm font-bold mb-2">Pangkat/Gol</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="pangkat" placeholder="Masukkan Pangkat/Gol" wire:model="pangkat">
                            @error('pangkat') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="jabatan"
                                class="block text-gray-700 text-sm font-bold mb-2">Jabatan</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="jabatan" placeholder="Masukkan Pangkat/Gol" wire:model="jabatan">
                            @error('jabatan') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="norek"
                                class="block text-gray-700 text-sm font-bold mb-2">No Rekening</label>
                            <input type="number"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="norek" placeholder="Masukkan No Rekening" wire:model="norek">
                            @error('norek') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="email"
                                class="block text-gray-700 text-sm font-bold mb-2">E-mail</label>
                            <input type="email"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" placeholder="Masukkan Email" wire:model="email">
                            @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>                 
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto btn-success">
                        <button wire:click.prevent="store()" type="button"
                            class="btn btn-success inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 text-base leading-6 font-bold text-white shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Simpan
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto btn-danger">
                        <button wire:click="closeModal()" type="button"
                            class="btn-danger inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 text-base leading-6 font-bold text-white shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Tutup
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>