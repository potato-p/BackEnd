@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Supplier</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/datatables.min.css') }}"/>
</head>
<body>

	<dir class="container">
		
	<h2>Data Supplier</h2>
	
	<a class="btn btn-primary" href="{{ route ('supplier.create')}}"> Create </a> <br>

	<table class="table">
		<thead class="thead-light">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Adress</th>	
				<th>City</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>	
		</thead>
		<tbody>
			@foreach($supplier as $a)
			<tr>
				<td>{{ $a->id }}</td>
				<td>{{ $a->nama }}</td>
				<td>{{ $a->alamat }}</td>
				<td>{{ $a->kota }}</td>
				<td>{{ $a->no_tlp }}</td>
				
				<td>
					<form action="{{ route('supplier.destroy', $a->id) }}" method="post">
						<a href="{{ route('supplier.edit', $a->id) }}" class="btn btn-primary">Edit</a> |
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>	
				
				
			</tr>
		</tbody>
		
			@endforeach
	</table>
</dir>
<script type="text/javascript" src="{{ asset('js/datatables/datatables.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>

@endsection