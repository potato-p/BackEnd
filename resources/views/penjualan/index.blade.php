@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Data Selling</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<h2>Data Selling</h2>
		<a class="btn btn-primary" href="{{ route ('penjualan.create')}}"> Add </a> <br>
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th>No</th>
					<th>Date</th>
					<th>Staff</th>
					<th>Costumer</th>
					
					<th>Action</th>


				</tr>	
			</thead>
			<tbody>
				@foreach($jual as $a)
				<tr>
					<td>{{ $a->no }}</td>
					<td>{{ $a->tanggal }}</td>
					<td>{{ $a->karyawan->nama }}</td>
					<td>{{ $a->pelanggan->nama}}</td>
					
					
					
					<td>
						<form action="{{ route('penjualan.destroy', $a->no) }}" method="post">
							<a href="{{ route('penjualan.edit', $a->no) }}" class="btn btn-primary">Edit</a> |
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