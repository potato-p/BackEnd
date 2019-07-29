<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
	  <div class="collapse navbar-collapse">
	  	<div class="navbar-nav">
	  		<a class="nav-item nav-link" href="{{route('mokit.index')}}">Model Kit</a>
	  		
	  	</div>
	  </div>
	</nav>

	<div class="container">
		@yield('content')
	</div>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>