<div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Monthly Recap Report</h5>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a class="dropdown-divider"></a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="p-1 card-body">

                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-reply"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>

                        <div class="float-right">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Cari Produk..."
                                    wire:model.live='search'>
                                <div class="input-group-append">
                                    <div class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>

                    {{-- Tamplian Mobile --}}
                    <div class="d-sm-none">
                        <div class="p-0 m-0 row">
                            @foreach ($list_produk_android as $item)
                                <div class="p-1 m-0 col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2">
                                    <a wire:navigate href="{{ route('produk.detail', $item->id) }}">
                                        <div class="p-0 m-0 card">
                                            <img src="@if ($item->image) {{ asset('storage/' . $item->image) }} @else https://budiberlianmotor.co.id/wp-content/uploads/logo-wa-scaled.jpg @endif"
                                                class="mx-auto img-fluid" alt="{{ $item->NAMA }}"
                                                style="height: 14rem;">


                                            <div class="p-2 card-body">
                                                <h5 class="card-title text-dark text-bold">{{ $item->KDBR }}</h5>
                                                <p class="card-text text-dark">
                                                    {{ $item->NAMA }}
                                                    <br>
                                                    {{ $item->SATUAN }} -
                                                    {{ $item->FT_NMGROUP }}
                                                    <br>
                                                    {{ $item->KETERANGAN }}
                                                    <br>
                                                    <strong>
                                                        Rp {{ number_format($item->HRG_JUAL, 0, ',', '.') }}

                                                    </strong>
                                                    <br>
                                                </p>
                                            </div>
                                            <div class="p-1 card-footer">
                                                <a href="#" class="btn btn-primary btn-xs"><i
                                                        class="mr-2 nav-icon fas fa-file"></i>Detail</a>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- Tampilan Dekstop --}}
                    <div class="d-none d-sm-block">
                        <div class="table-respomsive">
                            <table class="table table-sm table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Barang </th>
                                        <th>Nama Barang</th>
                                        <th>Grups</th>
                                        <th>Merk</th>
                                        <th>Satuan</th>
                                        <th>Lokasi Rak</th>
                                        <th class="text-center">Harga</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_produk_dekstop as $item)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $item->KDBR }}</td>
                                            <td>{{ $item->NAMA }}</td>
                                            <td>{{ $item->KDGROUP }}</td>
                                            <td>{{ $item->PRODUKSI }}</td>
                                            <td>{{ $item->SATUAN }}</td>
                                            <td>{{ $this->getRakLokasi($item->KDBR) }}</td>
                                            <td class="text-right">{{ number_format($item->HRG_JUAL, 2) }}</td>
                                            <td>{{ $item->nama_umum }}</td>
                                            <td>
                                                {{-- <a href="{{ route('produk.detail', $item->id) }}"
                                                class="btn btn-primary btn-xs"><i
                                                    class="mr-2 nav-icon fas fa-file"></i>Detail</a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
                <div class="p-2 card-footer">
                    {{-- {{ $data_produk->links() }} --}}
                </div>
            </div>
        </div>
    </div>

</div>
