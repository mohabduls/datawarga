<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<meta name="csrf_token" content="{{csrf_token()}}">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--assets CSS-->
		<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/css/datawarga.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/css/datatables.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/css/iziModal.min.css')}}">

		<!--assets JS-->
		<script type="text/javascript" src="{{url('assets/js/jquery-3.4.1.js')}}"></script>
		<script type="text/javascript" src="{{url('assets/js/bootstrap.js')}}"></script>
		<script type="text/javascript" src="{{url('assets/js/datatables.min.js')}}"></script>
		<script type="text/javascript" src="{{url('assets/js/iziModal.min.js')}}"></script>
		<script type="text/javascript" src="{{url('assets/js/warga.js')}}"></script>
	</head>
	<body>
		<!--header-->
		<section>
			<header>
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
					<a class="navbar-brand font-weight-bolder">Data Warga</a>
					<!--content nav-->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#wargaNav" aria-controls="wargaNav" aria-expanded="false" aria-label="Warga App Navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!--collapse-->
					<div class="collapse navbar-collapse" id="wargaNav">
						<div class="navbar-nav">
							<a class="nav-item nav-link" href="#" onclick="tambahRw()">Tambah RW</a>
							<a class="nav-item nav-link" href="#" onclick="tambahRt()">Tambah RT</a>
							<a class="nav-item nav-link" href="#" onclick="tambahKk()">Tambah Kepala Keluarga</a>
							<a class="nav-item nav-link" href="#" onclick="tambahKeluarga()">Tambah Keluarga</a>
							<a class="nav-item nav-link" href="#" onclick="editPengaturan()">Pengaturan</a>
							<a class="nav-item nav-link" href="{{url('logout')}}">Logout</a>
						</div>
					</div>
				</nav>
			</header>
		</section>
		
		<!--content-->
		<div class="wrapper">
			@yield('AdminIndex')
		</div>

		<!--include modal-->
		@include('modal.admin-modal')
		@include('modal.edit-modal')
		<!--footer-->
		<footer class="p-5">
			<div class="text-center">
				<small>
					&copy; 2020 - Developed by <a href="https://www.linkedin.com/in/mohabduls" class="text-info font-weight-bolder">Mohamad Abdul Sobur</a>
				</small>
			</div>
		</footer>
	</body>
</html>