<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
	<h2>Edit Data Stock</h2>

	<form action="{{ route('stok.update', $stok->no) }}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
		<div class="form-group">
			<label>Date</label>
			<input type="date" name="tanggal" class="form-control" value="{{$stok->tanggal}}" required>
		</div>
		<div class="form-group">
			<label>Staff</label>
			<select name = "karyawan_id" class="form-control">
				<option value="{{$stok->karyawan->id}}">{{$stok->karyawan->nama}}</option>
				@foreach($karyawan as $a)
				<option value="{{$a->id}}">{{$a->nama}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Supplier</label>
			<select name = "supplier_id" class="form-control">
				<option value="{{$stok->supplier->id}}">{{$stok->supplier->nama}}</option>
				@foreach($supplier as $a)
				<option value="{{$a->id}}">{{$a->nama}}</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group">
			<label>Model Kit</label>
			<select name = "supplier_id" class="form-control">
				<option value="{{$stok->mokit->id}}">{{$stok->mokit->nama}}</option>
				@foreach($mokit as $a)
				<option value="{{$a->id}}">{{$a->nama}}</option>
				@endforeach
			</select>

		</div>
		<!-- <div class="form-group">
			<label>Model Kit</label>
			<select name = "mokit_id" class="form-control">
				<option value="{{$stok->mokit_id}}">{{$stok->nama}}</option>	
				@foreach($mokit as $a)
				<option value="{{$a->id}}">{{$a->nama}}</option>
				@endforeach
			</select>
		</div> -->
		<div class="form-group">
			<label>Total Stock</label>
			<input type="number" name="jumlah_mokit" class="form-control" value="{{$stok->jumlah_mokit}}" required>
		</div>

		<div class="form-group">
			<label>Sell Cost</label>
			<input type="number" name="h_jual" class="form-control" value="{{$stok->h_jual}}">
		</div>
		
		<div class="form-group">
			<label>Buy Cost</label>
			<input type="number" name="h_beli" class="form-control" value="{{$stok->h_beli}}" required>
		</div>
		<button type="submit" class="btn btn-primary">
			Save
		</button>
		<a href="{{ route('stok.index')}}" class="btn btn-primary">Back</a>
	</form>

</div>
</body>
</html>

