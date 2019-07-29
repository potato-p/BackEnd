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
		
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th>NO</th>
					<th>ID penjualan</th>
					
					<th>mokit</th>
					
					<th>Action</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($detail as $a)
				<tr>
					<td>{{ $a->id }}</td>
					<td>{{ $a->penjualan_id }}</td>
					
					<td>{{ $a->mokit->nama}}</td>
					
					<td>
						<form action="{{ route('detail.destroy', $a->id) }}" method="post">
							 |
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