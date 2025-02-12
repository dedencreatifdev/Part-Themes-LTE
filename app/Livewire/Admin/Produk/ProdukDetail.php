<?php

namespace App\Livewire\Admin\Produk;

use App\Models\Produk;
use App\Models\RakLokasi;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Produk Detail')]

class ProdukDetail extends Component
{
    public $id;

    public function relasiProduk()
    {
        $relasiProduk = Produk::find($this->id);
        return $relasiProduk->KDBR;
    }

    public function render()
    {
        return view('livewire.admin.produk.produk-detail', [
            'produk' => Produk::find($this->id),
            'produk_relasi' => Produk::where('keterangan', 'like', '%' . $this->relasiProduk() . '%')
                ->orWhere('kdbr', 'like', '%' . $this->relasiProduk() . '%')
                ->orWhere('nama', 'like', '%' . $this->relasiProduk() . '%')
                ->WhereNot('KDGROUP', '=', 'sm')
                ->get(),
            'rak_lokasi' => RakLokasi::where('kdbr', 'like', '%' . $this->relasiProduk() . '%')
                ->first(),
            'relasiProduk' => $this->relasiProduk()
        ]);
    }

    public function mount($id)
    {
        $this->id = $id;
    }
}
