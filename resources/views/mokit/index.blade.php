@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Data Model Kit</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<h2>Data Model Kit</h2>

		<a class="btn btn-primary" href="{{ route ('mokit.create')}}"> Add </a> <br>

		<table class="table">
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Grade</th>
					<th>Supplier</th>
					<th>Action</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($mokit as $a)
				<tr>
					<td>{{ $a->id }}</td>
					<td>{{ $a->nama }}</td>
					<td>{{ $a->grade }}</td>
					<td>{{ $a->supplier->nama }}</td>
					<td>
						<form action="{{ route('mokit.destroy', $a->id) }}" method="post">
							<a href="{{ route('mokit.edit', $a->id) }}" class="btn btn-primary">Edit</a> |
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