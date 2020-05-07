@extends('master.login-master')
@section('FormLogin')
<div class="container mt-5">
	<div class="row">
		<div class="col-lg-6">
			<img src="{{url('assets/img/keluarga.png')}}" class="img-fluid" alt="keluarga">
		</div>
		<div class="col-lg-6">
			<h1 class="lead font-weight-bold display-4 text-dark">DataWarga</h1>
			<p class="text-dark">Selamat datang di aplikasi DataWarga</p>
			<div class="bg-custom rounded-lg p-0 shadow shadow-sm">
				@if($errors->any())
					<div class="alert alert-danger">
						<strong>Peringatan!</strong><br>
						{{$errors->first()}}
					</div>
				@endIf
				<div class="bg-primary p-2 m-0">
					<h2 class="lead text-light font-weight-bold">Login</h2>
				</div>
				<form class="form p-2" action="{{url('auth')}}" method="POST">
					@csrf
					<div class="form-group">
						<label class="form-label">Username</label>
						<input class="form-control rounded-lg" type="text" name="username" id="uLogin" minlength="5" autocomplete="none">
						<small class="form-label" id="uLabel">Silahkan masukan username</small>
					</div>
					<div class="form-group">
						<label class="form-label">Password</label>
						<input class="form-control rounded-lg" type="password" name="password" id="pLogin" minlength="5">
						<small class="form-label" id="pLabel">Silahkan masukan password</small>
					</div>
					<div class="clearfix">
						<button class="btn btn-sm btn-outline btn-outline-primary float-right">Login</button>
					</div>
				</form>
		</div>
		<div class="col-lg-12">
			<small class="text-light">Developed by @mohabduls</small>
		</div>
	</div>
</div>
@endSection