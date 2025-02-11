<?php

namespace App\Livewire\Admin\Produk;

use App\Models\Produk;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Produk Detail')]

class ProdukDetail extends Component
{
    public $id;
    public $KETERANGAN;

    public function render()
    {
        return view('livewire.admin.produk.produk-detail', [
            'produk' => Produk::find($this->id),
            'produk_relasi' => Produk::where('kdbr', 'like', '%' . $this->id . '%')->get(),
        ]);
    }
}
