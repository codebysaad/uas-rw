<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pegawai;

class Pegawais extends Component
{
    public $pegawais, $pegawai_id, $nama, $nip, $pangkat, $jabatan, $norek, $email;
    public $isModalOpen = 0;

    public function render()
    {
        // $this->pegawais = Pegawai::all();
        $this->pegawais = Pegawai::all();
        return view('livewire.pegawais');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->nama = '';
        $this->nip = '';
        $this->pangkat = '';
        $this->jabatan = '';
        $this->norek = '';
        $this->email = '';
    }
    
    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'nip' => 'required',
            'pangkat' => 'required',
            'jabatan' => 'required',
            'norek' => 'required',
            'email' => 'required',
        ]);
    
        Pegawai::updateOrCreate(['id' => $this->pegawai_id], [
            'nama' => $this->nama,
            'nip' => $this->nip,
            'pangkat' => $this->pangkat,
            'jabatan' => $this->jabatan,
            'norek' => $this->norek,
            'email' => $this->email,
        ]);

        session()->flash('message', $this->pegawai_id ? 'Data updated successfully.' : 'Data added successfully.');

        $this->closeModal();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        $this->pegawai_id = $id;
        $this->nama = $pegawai->nama;
        $this->nip = $pegawai->nip;
        $this->pangkat = $pegawai->pangkat;
        $this->jabatan = $pegawai->jabatan;
        $this->norek = $pegawai->norek;
        $this->email = $pegawai->email;
    
        $this->openModal();
    }
    
    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        session()->flash('message', $pegawai->nama . 'Deleted.');
    }
}