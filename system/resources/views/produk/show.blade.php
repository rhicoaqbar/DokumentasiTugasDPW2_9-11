@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Produk

                    </div>
                    <div class="card-body">

                        <h3>{{ $produk->nama }}</h3>
                        <hr>
                        <p>{{ $produk->harga }}|
                            Stok {{ $produk->stok }} |
                            Seller : {{ $produk->seller->nama }} |
                            Tanggal Produk : {{ $produk->created_at->diffForHumans() }}

                        </p>
                        <p>
                            {!! nl2br($produk->deskripsi) !!}
                        </p>
                        <p>
                            <img src="{{ url("public/$produk->foto") }}" alt="{{ $produk->foto }}" class="img-fluid">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
