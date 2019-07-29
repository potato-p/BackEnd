<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
		<h2>Add Karyawan</h2>

		<form action="{{ route ('karyawan.store') }}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="nama" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Adress</label>
				<input type="text" name="alamat" class="form-control" required>
			</div>
			<div class="form-group">
				<label>City</label>
				<input type="text" name="kota" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="text" name="no_tlp" class="form-control" required maxlength="12">
			</div>
			
			<button type="submit" class="btn btn-primary">
				Add
			</button>
			<a href="{{ route('karyawan.index')}}" class="btn btn-primary">Back</a>
		</form>
	</div>

</body>
</html>