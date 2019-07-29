

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
	<h2>Edit Data Sell</h2>

	<form action="{{ route('penjualan.update', $jual->no) }}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
		<div class="form-group">
			<label>Date</label>
			<input type="date" name="tanggal" class="form-control" value="{{$jual->tanggal}}" required>
		</div>
		<div class="form-group">
			<label>Staff</label>
			<select name = "karyawan_id" class="form-control">
				<option value="{{$jual->karyawan->id}}">{{$jual->karyawan->nama}}</option>
				@foreach($karyawan as $a)
				<option value="{{$a->id}}">{{$a -> nama}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Costumer</label>
			<select name = "pelanggan_id" class="form-control">
				<option value="{{$jual->pelanggan->id}}">{{$jual->pelanggan->nama}}</option>
				@foreach($pelanggan as $a)
				<option value="{{$a->id}}">{{$a -> nama}}</option>
				@endforeach
			</select>
		</div>
		
		
		
		<button type="submit" class="btn btn-primary">
			Save
		</button>
		<a href="{{ route('penjualan.index')}}" class="btn btn-primary">Back</a>
	</form>

</div>
</body>
</html>

