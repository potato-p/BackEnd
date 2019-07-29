@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Data Stock</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	

	<div class="container">
		
		<h2>Data Stock</h2>
		<a class="btn btn-primary" href="{{ route ('stok.create')}}"> Create </a> <br>

		<table class="table">
			<thead class="thead-light">
				<tr>
					<th>No</th>
					<th>Date</th>
					<th>Staff</th>
					<th>Supplier</th>
					<th>Model Kit</th>
					<th>Qty</th>
					<th>Sell Cost</th>
					<th>Buy Cost</th>
					<th>Action</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($stok as $a)
				<tr>
					<td>{{ $a->no }}</td>
					<td>{{ $a->tanggal }}</td>
					<td>{{ $a->karyawan->nama }}</td>
					<td>{{ $a->supplier->nama }}</td>
					<td>{{ $a->mokit->nama }}</td>
					<td>{{ $a->jumlah_mokit }}</td>
					<td>{{ $a->h_jual }}</td>
					<td>{{ $a->h_beli }}</td>
					<td>
						<form action="{{ route('stok.destroy', $a->no) }}" method="post">
							<a href="{{ route('stok.edit', $a->no) }}" class="btn btn-primary">Edit</a> |
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