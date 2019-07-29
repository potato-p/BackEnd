@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<h2>Data Karyawan</h2>

		<a class="btn btn-primary" href="{{ route ('karyawan.create')}}"> Create </a> <br>

		<table class="table">
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Address</th>
					<th>City</th>
					<th>Telp</th>
					<th>Action</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($karyawan as $a)
				<tr>
					<td>{{ $a->id }}</td>
					<td>{{ $a->nama }}</td>
					<td>{{ $a->alamat }}</td>
					<td>{{ $a->kota }}</td>
					<td>{{ $a->no_tlp }}</td>
					
					<td>
						<form action="{{ route('karyawan.destroy', $a->id) }}" method="post">
							<a href="{{ route('karyawan.edit', $a->id) }}" class="btn btn-primary">Edit</a> |
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</td>	
				</tr>
			</tbody>
			
				@endforeach
		</table>
	</div>
		


</body>
</html>


@endsection