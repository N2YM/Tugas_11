@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/produk') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                Kembali</i></a>
            <div class="card mt-2">
                <div class="card-header">
                    Tambah Data Produk
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/produk') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-grup">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-grup">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto" accept=".png">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-grup">
                                <label for="">Harga</label>
                                <input type="text" class="form-control" name="harga">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-grup">
                                <label for="">Berat</label>
                                <input type="text" class="form-control" name="berat">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-grup">
                                <label for="">Stok</label>
                                <input type="text" class="form-control" name="stok">
                            </div>
                        </div>
                    </div>
                    <div class="form-grup">
                        <label for="">Deskripsi</label>
                       <textarea name="deskripsi" id="deskripsi" class="form-control" ></textarea>
                    </div>
                    <button class="btn btn-dark float-right mt-4"> <i class="mdi mdi-content-save"></i> Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
     $(document).ready(function() {
    $('#deskripsi').summernote();
    });
</script>
@endpush