@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Detail Penjualan</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}}">
</head>
<body>
	<div class="container">
	
<!DOCTYPE html>
<html>
<head>
	<title>DETAIL PENJUALAN</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}">
</head>
<body>
	<h1>DETAIL PENJUALAN</h1>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 	Tambahkan
</button>
<div class="container">
<h5>Tanggal : {{$jual->tanggal}}</h5>
<h5>Nama Staff : {{$jual->karyawan->nama}}</h5>
<h5>Nama Pelanggan : {{$jual->pelanggan->nama}}</h5>
</div>

	<table class="table">
		<tr>
			<th>nama barang</th>
			<th>jumlah dibeli</th>
			<th>subtotal</th>
			<th>action</th>
		
		</tr>
		@php
		$total = 0;
		@endphp
		@foreach($detail as $pa)
    <tr>
        <td>{{ $a->stok->mokit_id->nama}}</td>
        <td>{{ $a->jumlah }}</td>
        <td>{{ $a->stok->h_jual * $a->jumlah }}</td>
        <td></td>
    </tr>
    	@php
    	$total += $a->stok->h_jual * $a->jumlah;
    	$qty += $a->stok->jumlah_mokit - $a->jumlah
    	@endphp
    @endforeach
		</table>
		<h5>
			<strong>
				Total Harga : Rp. {{ $total }}
			</strong>
		</h5>

		<div class="modal fade" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Detail</h5>
      </div>
      <div class="modal-body">
        <form action="{{ route('detail.store') }}" method="post">
            {{ csrf_field() }}
        <input type="hidden" name="penjualan_id" value="{{ $jual->id }}">
        <div class="form-group">
            <label>Nama Barang</label>
            <select name="mokit_id" class="form-control">
                <option value="">Pilih</option>
                @foreach($stok as $a)
                <option value="{{ $a->id }}">{{ $a->mokit->nama }} - Rp. {{ $a->h_jual }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>QTY</label>
            <input type="number" name="jumlah" class="form-control">
        </div>
        <button type="submit"> Simpan </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
@endsection

	</div>

</body>
</html>