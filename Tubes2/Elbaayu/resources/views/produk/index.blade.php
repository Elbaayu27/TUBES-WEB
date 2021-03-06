@extends('layouts.app')

@section('content')
<style type="text/css">
  .green{
    background-color: #93bc7e;
  }
</style>
<div class="container">
  <div class="row green">
    <div class="col-md-12">
        <h2 align="center"> 
            <font face="sweet pea">
          <u>
          MatchaAddict
          </u>
        </font> 
      </h2>
      <?php 
    
    ?>

    <a href="{{ route('produk.create') }}" class="btn btn-info btn-sm">Tambah Produk Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <td>{{ $produk->id }}</td>
                    <td><a href="{{ route('produk.show', $produk->id) }}">{{ $produk->nama_produk }}</a></td>
                    <td><a href="{{ route('produk.show', $produk->id) }}">{{ $produk->kategori }}</a></td>
                    <td>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  </div>
</div>
@endsection