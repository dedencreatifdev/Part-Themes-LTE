<div>
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{ $produk->KDBR }}
                    </h3>
                    <div class="col-12">
                        <img src="@if ($produk->image) {{ asset('storage/' . $produk->image) }}
                        @else https://budiberlianmotor.co.id/wp-content/uploads/logo-wa-scaled.jpg @endif"
                            class="product-image" alt="Product Image">
                    </div>
                    <div class="col-12 product-image-thumbs">
                        <div class="product-image-thumb active"><img src="{{ asset('style') }}/dist/img/prod-1.jpg"
                                alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="{{ asset('style') }}/dist/img/prod-2.jpg"
                                alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="{{ asset('style') }}/dist/img/prod-3.jpg"
                                alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="{{ asset('style') }}/dist/img/prod-4.jpg"
                                alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="{{ asset('style') }}/dist/img/prod-5.jpg"
                                alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 ">
                    <h3 class="my-3 d-none d-sm-block text-bold"><code>{{ $produk->KDBR }}</code></h3>
                    <h5 class="my-2">
                        {{ $produk->NAMA }}

                        @if ($produk->nama_umum)
                            <br>
                            <code>{{ $produk->nama_umum }}</code>
                        @endif
                    </h5>

                    <hr>

                    <p>
                        @if ($produk->short_deskripsi)
                            <h4 class="mt-3"><small>Produk Deskripsi</small></h4>
                            {{ $produk->short_deskripsi }}
                        @else
                            <h4 class="mt-3"><small>Tentang Kami</small></h4>
                            MITSUBISHI MOTOR INDONESIA
                            <br>PT.BUDI BERLIAN MOTOR <br>DEALER RESMI MITSUBISHI <br>Telp : 0721-709999 <br>Fax :
                            0721-771305
                        @endif
                    </p>


                    <h4 class="mt-3"><small>Keterangan</small></h4>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Lokasi Rak</th>
                                    <th>Produksi</th>
                                    <th>Id Kode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>{{ $this->getRakLokasi($produk->KDBR)  }}</td>
                                    <td>{{ $produk->PRODUKSI }}</td>
                                    <td>{{ $produk->ID_KODE }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-3"><small>Type Kendaraan </small><a href="/"
                            class="btn btn-xs btn-default">Lihat Semua</a></h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Nama</th>
                                    <th>Tahun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>KG4W</td>
                                    <td>All New Pajero Sp 2.4L Dakar (4X2) A/T</td>
                                    <td>2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-3 py-2 mt-4 bg-light">
                        <h4 class="mt-0">
                            <small>
                                Satuan : {{ $produk->SATUAN }}
                            </small>
                        </h4>
                        <h2 class="mb-0">
                            <code class="text-bold">
                                Rp {{ number_format($produk->HRG_JUAL, 2) }}
                            </code>
                        </h2>
                    </div>

                    <div class="mt-4">
                        <div class="btn btn-primary btn-lg btn-flat btn-sm">
                            <i class="mr-2 fas fa-cart-plus fa-lg"></i>
                            Order
                        </div>

                        <div class="btn btn-default btn-lg btn-flat btn-sm">
                            <i class="mr-2 fas fa-heart fa-lg"></i>
                            Add to Wishlist
                        </div>
                    </div>

                    <div class="mt-4 product-share">
                        <a href="#" class="text-gray">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-rss-square fa-2x"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="mt-4 row">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                            role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                            href="#product-comments" role="tab" aria-controls="product-comments"
                            aria-selected="false">Comments</a>
                        <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating"
                            role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                    </div>
                </nav>
                <div class="p-3 tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                        aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in
                        faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at
                        efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed
                        rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh,
                        congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis.
                        Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus.
                        Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida
                        velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque
                        justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante.
                        Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non
                        convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id
                        enim a erat fringilla sollicitudin ultrices vel metus. </div>
                    <div class="tab-pane fade" id="product-comments" role="tabpanel"
                        aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus.
                        Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et
                        finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum,
                        venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna.
                        Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris
                        hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl
                        dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis
                        dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex
                        ullamcorper, ornare velit vel, tincidunt ipsum. </div>
                    <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                        Cras ut ipsum ornare, aliquam ipsum non,
                        posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id
                        fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel
                        ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod
                        neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet
                        feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie
                        lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at,
                        consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a.
                        Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi
                        orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius
                        massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
