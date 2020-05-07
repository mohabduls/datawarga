@extends('master.admin-master')

@section('title','Administrator - Aplikasi Data Warga')
@section('AdminIndex')
<section>
	<div class="container-fluid mt-2 bg-light">
		@if($errors->count() > 0)
		<div class="alert alert-warning">
			<h5 class="alert-heading">Peringatan!</h5>
			<ul>
				@foreach($errors->all() as $err)
				<li>{{$err}}</li>
				@endForeach
			</ul>
		</div>
		@endIf
		<div class="row">
			<div class="col-lg-3 mt-1">
				<div class="bg-info text-light p-2 rounded-lg shadow shadow-sm text-center border">
					<h2 class="display-4 mb-0 font-weight-bolder">{{$RW->count()}} RW</h2>
					<a href="{{url('export/rw')}}" class="btn btn-light btn-block btn-sm">Export Excel</a>
				</div>
			</div>
			<div class="col-lg-3 mt-1">
				<div class="bg-primary text-light p-2 rounded-lg shadow shadow-sm text-center">
					<h2 class="display-4 mb-0 font-weight-bolder">{{$RT->count()}} RT</h2>
					<a href="{{url('export/rt')}}" class="btn btn-light btn-block btn-sm">Export Excel</a>
				</div>
			</div>
			<div class="col-lg-3 mt-1">
				<div class="bg-warning text-light p-2 rounded-lg shadow shadow-sm text-center">
					<h2 class="display-4 mb-0 font-weight-bolder">{{$KK->count()}} KK</h2>
					<a href="{{url('export/kk')}}" class="btn btn-light btn-block btn-sm">Export Excel</a>
				</div>
			</div>
			<div class="col-lg-3 mt-1">
				<div class="bg-dark text-light p-2 rounded-lg shadow shadow-sm text-center">
					<h2 class="display-4 mb-0 font-weight-bolder">{{$K->count()}} W</h2>
					<a href="{{url('export/k')}}" class="btn btn-light btn-block btn-sm">Export Excel</a>
				</div>
			</div>
			<div class="col-lg-12 mt-2">
				<div class="bg-light p-2 shadow shadow-sm">
					<h2>Data RW</h2>
					@if($RW->count() > 0)
					<div class="table-responsive">
						<table class="table table-bordered table-sm" id="RWTable">
							<thead>
								<tr>
									<th>
										Nama Lengkap
									</th>
									<th>
										No RW
									</th>
									<th>
										No NIK
									</th>
									<th>
										No KK
									</th>
									<th>
										TTL
									</th>
									<th>
										Jenis Kelamin
									</th>
									<th>
										Gol-darah
									</th>
									<th>
										Alamat
									</th>
									<th>
										Agama
									</th>
									<th>
										Status Perkawinan
									</th>
									<th>
										Aksi Data
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($RW as $datarw)
								<tr>
									<td>
										{{$datarw->nama_lengkap}}
									</td>
									<td>
										{{$datarw->no_rw}}
									</td>
									<td>
										{{$datarw->no_nik}}
									</td>
									<td>
										{{$datarw->no_kk}}
									</td>
									<td>
										{{$datarw->ttl}}
									</td>
									<td>
										{{$datarw->jenis_kelamin}}
									</td>
									<td>
										{{$datarw->golongan_darah}}
									</td>
									<td>
										{{$datarw->alamat}}
									</td>
									<td>
										{{$datarw->agama}}
									</td>
									<td>
										{{$datarw->status_perkawinan}}
									</td>
									<td>
										<div class="btn-group">
											<button class="btn btn-sm btn-primary" data-id="{{$datarw->id}}" onclick="editDataRw(this)">Edit</button>

											<button class="btn btn-sm btn-danger" onclick="hapusData(this)" data-url="{{url('hapus/rw/'.$datarw->id)}}">Hapus</button>
										</div>
									</td>
								</tr>
								@endForeach
							</tbody>
						</table>
					</div>
					@else
					<div class="alert alert-info">
						<h4 class="alert-heading">Informasi</h4>
						<hr>
						<p>Data RW belum di tambahkan, silahkan klik tombol <strong>Tambah RW</strong> untuk menambahkan!</p>
					</div>
					@endIf
				</div>
			</div>

			<div class="col-lg-12 mt-2">
				<div class="bg-light p-2 shadow shadow-sm">
					<h2>Data RT</h2>
					@if($RT->count() > 0)
					<div class="table-responsive">
						<table class="table table-bordered table-sm" id="RTTable">
							<thead>
								<tr>
									<th>
										Nama Lengkap
									</th>
									<th>
										No RT
									</th>
									<th>
										No RW
									</th>
									<th>
										No NIK
									</th>
									<th>
										No KK
									</th>
									<th>
										TTL
									</th>
									<th>
										Jenis Kelamin
									</th>
									<th>
										Gol-darah
									</th>
									<th>
										Alamat
									</th>
									<th>
										Agama
									</th>
									<th>
										Status Perkawinan
									</th>
									<th>
										Aksi Data
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($RT as $datart)
								<tr>
									<td>
										{{$datart->nama_lengkap}}
									</td>
									<td>
										{{$datart->no_rt}}
									</td>
									<td>
										{{App\RW::where('id',$datart->id)->first()->no_rw}}
									</td>
									<td>
										{{$datart->no_nik}}
									</td>
									<td>
										{{$datart->no_kk}}
									</td>
									<td>
										{{$datart->ttl}}
									</td>
									<td>
										{{$datart->jenis_kelamin}}
									</td>
									<td>
										{{$datart->golongan_darah}}
									</td>
									<td>
										{{$datart->alamat}}
									</td>
									<td>
										{{$datart->agama}}
									</td>
									<td>
										{{$datart->status_perkawinan}}
									</td>
									<td>
										<div class="btn-group">
											<button class="btn btn-sm btn-primary" data-id="{{$datart->id}}" onclick="editDataRt(this)">Edit</button>

											<button class="btn btn-sm btn-danger" onclick="hapusData(this)" data-url="{{url('hapus/rt/'.$datart->id)}}">Hapus</button>
										</div>
									</td>
								</tr>
								@endForeach
							</tbody>
						</table>
					</div>
					@else
					<div class="alert alert-info">
						<h4 class="alert-heading">Informasi</h4>
						<hr>
						<p>Data RT belum di tambahkan, Silahkan klik tombol <strong>Tambah RT</strong> untuk menambahkan!</p>
					</div>
					@endIf
				</div>
			</div>

			<div class="col-lg-12 mt-2">
				<div class="bg-light p-2 shadow shadow-sm">
					<h2>Data Kepala Keluarga</h2>
					@if($KK->count() > 0)
					<div class="table-responsive">
						<table class="table table-bordered table-sm" id="KKTable">
							<thead>
								<tr>
									<th>
										Nama Lengkap
									</th>
									<th>
										No NIK
									</th>
									<th>
										No KK
									</th>
									<th>
										No RT
									</th>
									<th>
										No RW
									</th>
									<th>
										TTL
									</th>
									<th>
										Jenis Kelamin
									</th>
									<th>
										Gol-darah
									</th>
									<th>
										Alamat
									</th>
									<th>
										Agama
									</th>
									<th>
										Status Perkawinan
									</th>
									<th>
										Pekerjaan
									</th>
									<th>
										Kewarganegaraan
									</th>
									<th>
										Aksi Data
									</th>
								</tr>
							</thead>

							<tbody>
								@foreach($KK as $kkeluarga)
								<tr>
									<td>
										{{$kkeluarga->nama_lengkap}}
									</td>
									<td>
										{{$kkeluarga->no_nik}}
									</td>
									<td>
										{{$kkeluarga->no_kk}}
									</td>
									<td>
										{{App\RT::where('id',$kkeluarga->rt_id)->first()->no_rt}}
									</td>
									<td>
										{{App\RW::where('id',$kkeluarga->rw_id)->first()->no_rw}}
									</td>
									<td>
										{{$kkeluarga->ttl}}
									</td>
									<td>
										{{$kkeluarga->jenis_kelamin}}
									</td>
									<td>
										{{$kkeluarga->golongan_darah}}
									</td>
									<td>
										{{$kkeluarga->alamat}}
									</td>
									<td>
										{{$kkeluarga->agama}}
									</td>
									<td>
										{{$kkeluarga->status_perkawinan}}
									</td>
									<td>
										{{$kkeluarga->pekerjaan}}
									</td>
									<td>
										{{$kkeluarga->kewarganegaraan}}
									</td>
									<td>
										<div class="btn-group w-100">
											<button class="btn btn-sm btn-primary" data-id="{{$kkeluarga->id}}" onclick="editDataKk(this)">Edit</button>

											<button class="btn btn-sm btn-danger" onclick="hapusData(this)" data-url="{{url('hapus/kk/'.$kkeluarga->id)}}">Hapus</button>
										</div>
									</td>
								</tr>
								@endForeach
							</tbody>
						</table>
					</div>
					@else
					<div class="alert alert-info">
						<h4 class="alert-heading">Informasi</h4>
						<hr>
						<p>Data Kepala Keluarga belum di tambahkan, Silahkan klik tombol <strong>Tambah Kepala Keluarga</strong> untuk menambahkan!</p>
					</div>
					@endIf
				</div>
			</div>

			<div class="col-lg-12 mt-2">
				<div class="bg-light p-2 shadow shadow-sm">
					<h2>Data Warga</h2>
					@if($K->count() > 0)
					<div class="table-responsive">
						<table class="table table-bordered table-sm" id="KTable">
							<thead>
								<tr>
									<th>
										Nama Lengkap
									</th>
									<th>
										No NIK
									</th>
									<th>
										Kepala Keluarga
									</th>
									<th>
										TTL
									</th>
									<th>
										Jenis Kelamin
									</th>
									<th>
										Gol-darah
									</th>
									<th>
										Agama
									</th>
									<th>
										Status Perkawinan
									</th>
									<th>
										Pekerjaan
									</th>
									<th>
										Kewarganegaraan
									</th>
									<th>
										Aksi Data
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($K as $dataWarga)
								<tr>
									<td>
										{{$dataWarga->nama_lengkap}}
									</td>
									<td>
										{{$dataWarga->no_nik}}
									</td>
									<td>
										{{App\KepalaKeluarga::where('id',$dataWarga->kepala_keluarga_id)->first()->nama_lengkap}}
									</td>
									<td>
										{{$dataWarga->ttl}}
									</td>
									<td>
										{{$dataWarga->jenis_kelamin}}
									</td>
									<td>
										{{$dataWarga->golongan_darah}}
									</td>
									<td>
										{{$dataWarga->agama}}
									</td>
									<td>
										{{$dataWarga->status_perkawinan}}
									</td>
									<td>
										{{$dataWarga->pekerjaan}}
									</td>
									<td>
										{{$dataWarga->kewarganegaraan}}
									</td>
									<td>
										<div class="btn-group w-100">
											<button class="btn btn-sm btn-primary" onclick="editDataKeluarga(this)" data-id="{{$dataWarga->id}}">Edit</button>

											<button class="btn btn-sm btn-danger" onclick="hapusData(this)" data-url="{{url('hapus/k/'.$dataWarga->id)}}">Hapus</button>
										</div>
									</td>
								</tr>
								@endForeach
							</tbody>
						</table>
					</div>
					@else
					<div class="alert alert-info">
						<h4 class="alert-heading">Informasi</h4>
						<hr>
						<p>Data Warga belum di tambahkan, Silahkan klik tombol <strong>Tambah Warga</strong> untuk menambahkan!</p>
					</div>
					@endIf
				</div>
			</div>
		</div>
		
	</div>
</section>
@endSection