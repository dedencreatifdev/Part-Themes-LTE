<?php

namespace App\Livewire\Admin\Produk;

use App\Models\Produk;
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
        $data_produk = Produk::where('kdbr', 'like', '%' . $this->search . '%')
            ->orWhere('nama', 'like', '%' . $this->search . '%')
            ->paginate(18);
        return view('livewire.admin.produk.produk-list', compact('data_produk'));
    }
}
