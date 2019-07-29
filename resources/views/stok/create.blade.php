<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		
		<h2>Add Mokit</h2>

	<form action="{{ route ('stok.store') }}" method="post">
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
			<label>Supplier</label>
			<select name = "supplier_id" class="form-control">
				
				@foreach($supplier as $a)
				<option value="{{$a->id}}">{{$a -> nama}}</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group">
			<label>Model Kit</label>
			<select name = "mokit_id" class="form-control">
				
				@foreach($mokit as $a)
				<option value="{{$a->id}}">{{$a -> nama}}</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group">
			<label>Total Stock</label>
			<input type="number" name="jumlah_mokit" class="form-control" required>
		</div>

		<div class="form-group">
			<label>Sell Cost</label>
			<input type="number" name="h_jual" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label>Buy Cost</label>
			<input type="number" name="h_beli" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary">
			Add
		</button>
	</form>
	</div>
	
</body>
</html>