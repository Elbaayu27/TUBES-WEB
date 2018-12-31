@extends('layouts.app')

@section('content')
<h4>Tambah Produk Baru</h4>
<form action="{{ route('produk.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : '' }}">
        <label for="nama_produk" class="control-label">Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk">
        @if ($errors->has('nama_produk'))
            <span class="help-block">{{ $errors->first('nama_produk') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('kategori') ? 'has-error' : '' }}">
        <label for="kategori" class="control-label">Kategori</label>
        
          <input type="radio" name="kategori" value="Food" class="form-control" checked> Food<br>
          <input type="radio" name="kategori" value="Beverage" class="form-control"> Beverage<br>  
        
        @if ($errors->has('kategori'))
            <span class="help-block">{{ $errors->first('kategori') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan Perubahan</button>
        <a href="{{ route('produk.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection