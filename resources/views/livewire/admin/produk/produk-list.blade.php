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
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm">
                            <i class="fas fa-sync-alt"></i>
                        </button>
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

                    <div class="p-0 m-0 row">
                        @foreach ($data_produk as $item)
                            <div class="p-1 m-0 col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                                <a href="{{ route('produk.detail', $item->id) }}">
                                    <div class=" p-0 m-0 card">
                                        <img src="{{ asset('style/dist/img/prod-1.jpg') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body p-2">
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
                                        <div class="card-footer p-1">
                                            <a href="#" class="btn btn-primary btn-xs"><i
                                                    class="nav-icon fas fa-file mr-2"></i>Detail</a>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>
