
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
	<h2>Edit Data Supplier</h2>

	<form action="{{ route('supplier.update', $supplier->id) }}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="nama" class="form-control" value="{{$supplier->nama}}" required>
		</div>
		<div class="form-group">
			<label>Adress</label>
			<input type="text" name="alamat" class="form-control" value="{{$supplier->alamat}}" required>
		</div>
		<div class="form-group">
			<label>City</label>
			<input type="text" name="kota" class="form-control" value="{{$supplier->kota}}" required>
		</div>
		<div class="form-group">
			<label>Phone</label>
			<input type="text" name="no_tlp" class="form-control" value="{{$supplier->no_tlp}}" required>
		</div>

		<button type="submit" class="btn btn-primary">
			Save
		</button>
		<a href="{{ route('supplier.index')}}" class="btn btn-primary">Back</a>
	</form>

</div>
</body>
</html>

