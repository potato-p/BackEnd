<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<h2>Add Data Sell</h2>

		<form action="{{ route ('penjualan.store') }}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label>Date</label>
				<input type="date" name="tanggal" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Staff</label>
				<select name = "karyawan_id" class="form-control">
					@foreach($karyawan as $a)
					<option value="{{$a->id}}">{{$a -> nama}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Costumer</label>
				<select name = "pelanggan_id" class="form-control">
					@foreach($pelanggan as $a)
					<option value="{{$a->id}}">{{$a -> nama}}</option>
					@endforeach
				</select>
			</div>
			
			<button type="submit" class="btn btn-primary">
				Add
			</button>
			<a href="{{ route('penjualan.index')}}" class="btn btn-primary">Back</a>
		</form>
	</div>
		


</body>
</html>