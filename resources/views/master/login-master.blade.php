<!DOCTYPE html>
<html>
	<head>
		<title>Aplikasi DataWarga</title>
		<meta charset="utf-8">
		<meta name="csrf_token" content="{{csrf_token()}}">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--assets-->
		<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/css/datawarga.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/css/datatables.css')}}">
		<script type="text/javascript" src="{{url('assets/js/jquery-3.4.1.js')}}"></script>
		<script type="text/javascript" src="{{url('assets/js/bootstrap.js')}}"></script>
		<script type="text/javascript" src="{{url('assets/js/datatables.min.js')}}"></script>
		<script type="text/javascript" src="{{url('assets/js/login.js')}}"></script>
	</head>
	<body>
		<div class="wrapper">
			@yield('FormLogin')
		</div>
		<footer class="p-5">
			<div class="text-center">
				<small>
					&copy; 2020 - Developed by <a href="https://www.linkedin.com/in/mohabduls" class="text-info font-weight-bolder">Mohamad Abdul Sobur</a>
				</small>
			</div>
		</footer>
	</body>
</html>