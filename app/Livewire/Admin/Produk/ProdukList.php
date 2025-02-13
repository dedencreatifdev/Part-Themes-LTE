<?php

namespace App\Livewire\Admin\Produk;

use App\Models\Produk;
use App\Models\RakLokasi;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Produk List')]

class ProdukList extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        $list_produk_android = Produk::where('kdbr', 'like', '%' . $this->search . '%')
            ->orWhere('nama', 'like', '%' . $this->search . '%')
            ->orWhere('nama_umum', 'like', '%' . $this->search . '%')
            ->whereNot('KDGROUP', '=', 'SM')
            ->simplepaginate(24);
        $list_produk_dekstop = Produk::where('kdbr', 'like', '%' . $this->search . '%')
            ->orWhere('nama', 'like', '%' . $this->search . '%')
            ->orWhere('nama_umum', 'like', '%' . $this->search . '%')
            ->whereNot('KDGROUP', '=', 'SM')
            ->simplepaginate(15);

        return view('livewire.admin.produk.produk-list', compact('list_produk_dekstop', 'list_produk_android'));
    }

    public function getRakLokasi($id)
    {
        $rak_lokasi = RakLokasi::where('kdbr', $id)->first();
        if ($rak_lokasi) {
            return $rak_lokasi->rak . ' - ' . $rak_lokasi->gudang;
        } else {
            return '-';
        }
    }
}
