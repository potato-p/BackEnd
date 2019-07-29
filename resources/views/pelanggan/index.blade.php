@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Data Costumer</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<h2>Data Costumer</h2>
		<a class="btn btn-primary" href="{{ route ('pelanggan.create')}}"> Add </a> <br>
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Adress</th>
					<th>Sex</th>
					<th>phone</th>
					<th>Action</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($pelanggan as $a)
				<tr>
					<td>{{ $a->id }}</td>
					<td>{{ $a->nama }}</td>
					<td>{{ $a->alamat }}</td>
					<td>{{ $a->jenis_kelamin }}</td>
					<td>{{ $a->no_hp }}</td>
					<td>
						<form action="{{ route('pelanggan.destroy', $a->id) }}" method="post">
							<a href="{{ route('pelanggan.edit', $a->id) }}" class="btn btn-primary">Edit</a> |
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