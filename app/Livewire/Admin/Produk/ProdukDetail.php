<?php

namespace App\Livewire\Admin\Produk;

use App\Models\Produk;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Produk Detail')]

class ProdukDetail extends Component
{
    public $id;

    public function render()
    {
        return view('livewire.admin.produk.produk-detail', [
            'produk' => Produk::find($this->id)
        ]);
    }
}
