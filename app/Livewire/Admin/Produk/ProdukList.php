<?php

namespace App\Livewire\Admin\Produk;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Produk List')]

class ProdukList extends Component
{
    public function render()
    {
        return view('livewire.admin.produk.produk-list');
    }
}
