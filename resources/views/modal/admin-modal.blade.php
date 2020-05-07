<!--Modal Tambah RW-->
<div class="iziModal" id="modal-tambahrw" data-iziModal-title="Tambah RW">
	<div class="p-3">
		<form class="form-group" method="post" action="{{url('tambah/rw')}}">
			@csrf
			<div class="form-group">
				<label class="form-label">Nama Lengkap</label>
				<input class="form-control" type="text" name="nama_lengkap" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No RW</label>
				<input class="form-control" type="number" name="no_rw" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No NIK</label>
				<input class="form-control" type="number" name="no_nik" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No KK</label>
				<input class="form-control" type="number" name="no_kk" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">Tempat Tanggal Lahir</label>
				<input class="form-control" type="text" name="ttl" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">Jenis Kelamin</label>
						<select class="form-control" name="jenis_kelamin">
							<option value="">Pilih..</option>
							<option value="L">L</option>
							<option value="P">P</option>
						</select>
						<small class="text-secondary">Dibutuhkan *</small>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">Golongan Darah</label>
						<select class="form-control" name="golongan_darah">
							<option value="">Pilih..</option>
							<option value="-">Tidak Diketahui</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
						</select>
						<small class="text-secondary">Dibutuhkan *</small>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Alamat Lengkap</label>
				<textarea class="form-control" placeholder="Alamat.." name="alamat" required></textarea>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<div class="form-group">
					<label class="form-label">Agama</label>
					<select class="form-control" name="agama" required>
						<option value="">Pilih..</option>
						<option value="Islam">Islam</option>
						<option value="Protestan">Protestan</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Buddha">Buddha</option>
						<option value="Khonghucu">Khonghucu</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
			</div>
			<div class="form-group">
				<div class="form-group">
					<label class="form-label">Status Perkawinan</label>
					<select class="form-control" name="status_perkawinan" required>
						<option value="">Pilih..</option>
						<option value="Lajang">Lajang</option>
						<option value="Duda">Duda</option>
						<option value="Menikah">Menikah</option>
						<option value="Cerai">Cerai</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
			</div>
			<div class="clearfix">
				<div class="float-right">
					<button class="btn btn-outline-primary btn-outline btn-sm">Tambah Data</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!--Modal Tambah RT-->
<div class="iziModal" id="modal-tambahrt" data-iziModal-title="Tambah RT">
	<div class="p-3">
		<form class="form-group" method="post" action="{{url('tambah/rt')}}">
			@csrf
			<div class="form-group">
				<label class="form-label">Nama Lengkap</label>
				<input class="form-control" type="text" name="nama_lengkap" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No RT</label>
				<input class="form-control" type="number" name="no_rt" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No RW</label>
				<select name="rw_id" class="form-control" required>
					<option value="">Pilih..</option>
					@foreach($RW as $dataRw)
					<option value="{{$dataRw->id}}">RW {{$dataRw->no_rw}} - {{$dataRw->nama_lengkap}}</option>
					@endForeach
				</select>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No NIK</label>
				<input class="form-control" type="number" name="no_nik" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No KK</label>
				<input class="form-control" type="number" name="no_kk" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">Tempat Tanggal Lahir</label>
				<input class="form-control" type="text" name="ttl" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">Jenis Kelamin</label>
						<select class="form-control" name="jenis_kelamin">
							<option value="">Pilih..</option>
							<option value="L">L</option>
							<option value="P">P</option>
						</select>
						<small class="text-secondary">Dibutuhkan *</small>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">Golongan Darah</label>
						<select class="form-control" name="golongan_darah">
							<option value="">Pilih..</option>
							<option value="-">Tidak Diketahui</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
						</select>
						<small class="text-secondary">Dibutuhkan *</small>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Alamat Lengkap</label>
				<textarea class="form-control" placeholder="Alamat.." name="alamat" required></textarea>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<div class="form-group">
					<label class="form-label">Agama</label>
					<select class="form-control" name="agama" required>
						<option value="">Pilih..</option>
						<option value="Islam">Islam</option>
						<option value="Protestan">Protestan</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Buddha">Buddha</option>
						<option value="Khonghucu">Khonghucu</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
			</div>
			<div class="form-group">
				<div class="form-group">
					<label class="form-label">Status Perkawinan</label>
					<select class="form-control" name="status_perkawinan" required>
						<option value="">Pilih..</option>
						<option value="Lajang">Lajang</option>
						<option value="Duda">Duda</option>
						<option value="Menikah">Menikah</option>
						<option value="Cerai">Cerai</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
			</div>
			<div class="clearfix">
				<div class="float-right">
					<button class="btn btn-outline-primary btn-outline btn-sm">Tambah Data</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!--Modal Tambah Kepala Keluarga-->
<div class="iziModal" id="modal-tambahkk" data-iziModal-title="Tambah Kepala Keluarga">
	<div class="p-3">
		<form class="form-group" method="post" action="{{url('tambah/kk')}}">
			@csrf
			<div class="form-group">
				<label class="form-label">Nama Lengkap</label>
				<input class="form-control" type="text" name="nama_lengkap" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No NIK</label>
				<input class="form-control" type="number" name="no_nik" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No KK</label>
				<input class="form-control" type="number" name="no_kk" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">Pekerjaan</label>
				<input class="form-control" type="text" name="pekerjaan" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">Kewarganegaraan</label>
				<input class="form-control" type="text" name="kewarganegaraan" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">No RT</label>
						<select name="rt_id" class="form-control" required>
							<option value="">Pilih..</option>
							@foreach($RT as $dataRt)
							<option value="{{$dataRt->id}}">RT {{$dataRt->no_rt}} - {{$dataRt->nama_lengkap}}</option>
							@endForeach
						</select>
						<small class="text-secondary">Dibutuhkan *</small>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">No RW</label>
						<select name="rw_id" class="form-control" required>
							<option value="">Pilih..</option>
							@foreach($RW as $dataRw)
							<option value="{{$dataRw->id}}">RW {{$dataRw->no_rw}} - {{$dataRw->nama_lengkap}}</option>
							@endForeach
						</select>
						<small class="text-secondary">Dibutuhkan *</small>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Tempat Tanggal Lahir</label>
				<input class="form-control" type="text" name="ttl" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">Jenis Kelamin</label>
						<select class="form-control" name="jenis_kelamin">
							<option value="">Pilih..</option>
							<option value="L">L</option>
							<option value="P">P</option>
						</select>
						<small class="text-secondary">Dibutuhkan *</small>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">Golongan Darah</label>
						<select class="form-control" name="golongan_darah">
							<option value="">Pilih..</option>
							<option value="-">Tidak Diketahui</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
						</select>
						<small class="text-secondary">Dibutuhkan *</small>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Alamat Lengkap</label>
				<textarea class="form-control" placeholder="Alamat.." name="alamat" required></textarea>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<div class="form-group">
					<label class="form-label">Agama</label>
					<select class="form-control" name="agama" required>
						<option value="">Pilih..</option>
						<option value="Islam">Islam</option>
						<option value="Protestan">Protestan</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Buddha">Buddha</option>
						<option value="Khonghucu">Khonghucu</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
			</div>
			<div class="form-group">
				<div class="form-group">
					<label class="form-label">Status Perkawinan</label>
					<select class="form-control" name="status_perkawinan" required>
						<option value="">Pilih..</option>
						<option value="Lajang">Lajang</option>
						<option value="Duda">Duda</option>
						<option value="Menikah">Menikah</option>
						<option value="Cerai">Cerai</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
			</div>
			<div class="clearfix">
				<div class="float-right">
					<button class="btn btn-outline-primary btn-outline btn-sm">Tambah Data</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!--Modal Tambah Warga-->
<div class="iziModal" id="modal-tambahkeluarga" data-iziModal-title="Tambah Kepala Keluarga">
	<div class="p-3">
		<form class="form-group" method="post" action="{{url('tambah/k')}}">
			@csrf
			<div class="form-group">
				<label class="form-label">Nama Lengkap</label>
				<input class="form-control" type="text" name="nama_lengkap" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">Kepala Keluarga</label>
				<select class="form-control" name="kepala_keluarga_id">
					@foreach($KK as $kepalaKeluarga)
					<option value="{{$kepalaKeluarga->id}}">{{$kepalaKeluarga->nama_lengkap}}</option>
					@endForeach
				</select>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No NIK</label>
				<input class="form-control" type="number" name="no_nik" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">Pekerjaan</label>
				<input class="form-control" type="text" name="pekerjaan" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">Kewarganegaraan</label>
				<input class="form-control" type="text" name="kewarganegaraan" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">Tempat Tanggal Lahir</label>
				<input class="form-control" type="text" name="ttl" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">Jenis Kelamin</label>
						<select class="form-control" name="jenis_kelamin">
							<option value="">Pilih..</option>
							<option value="L">L</option>
							<option value="P">P</option>
						</select>
						<small class="text-secondary">Dibutuhkan *</small>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label class="form-label">Golongan Darah</label>
						<select class="form-control" name="golongan_darah">
							<option value="">Pilih..</option>
							<option value="-">Tidak Diketahui</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
						</select>
						<small class="text-secondary">Dibutuhkan *</small>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-group">
					<label class="form-label">Agama</label>
					<select class="form-control" name="agama" required>
						<option value="">Pilih..</option>
						<option value="Islam">Islam</option>
						<option value="Protestan">Protestan</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Buddha">Buddha</option>
						<option value="Khonghucu">Khonghucu</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
			</div>
			<div class="form-group">
				<div class="form-group">
					<label class="form-label">Status Perkawinan</label>
					<select class="form-control" name="status_perkawinan" required>
						<option value="">Pilih..</option>
						<option value="Lajang">Lajang</option>
						<option value="Duda">Duda</option>
						<option value="Menikah">Menikah</option>
						<option value="Cerai">Cerai</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
			</div>
			<div class="clearfix">
				<div class="float-right">
					<button class="btn btn-outline-primary btn-outline btn-sm">Tambah Data</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!--Modal Hapus Data-->
<div class="iziModal" id="modal-hapusdata" data-iziModal-title="Hapus Data">
	<div class="p-3">
		<div class="alert alert-danger">
			<h5 class="alert-heading">Peringatan</h5>
			<p>Apakah anda yakin ingin menghapus data ini?<br> Klik hapus untuk melanjutkan!</p>
		</div>
		<div class="clearfix">
			<div class="float-right">
				<div class="btn-group">
					<button class="btn btn-danger btn-sm" id="next">Hapus</button>
					<button class="btn btn-secondary btn-sm" id="cancel">Batal</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Modal Edit Admin Login-->
<div class="iziModal" id="modal-pengaturan" data-iziModal-title="Pengaturan">
	<div class="p-3">
		<form class="form-group" action="{{url('edit/admin')}}" method="POST">
			@csrf
			<div class="form-group">
				<label class="form-label">Username</label>
				<input type="text" name="username" class="form-control" required="">
				<small>Username *</small>
			</div>
			<div class="form-group">
				<label class="form-label">Password</label>
				<input type="password" name="password" class="form-control" required="">
				<small>Password *</small>
			</div>
			<div class="form-group">
				<label class="form-label">Password Confirmation</label>
				<input type="password" name="passwordConfirmation" class="form-control" required="">
				<small>Password Confirmation *</small>
			</div>
			<div class="clearfix">
				<div class="float-right">
					<div class="btn-group">
						<button class="btn btn-info btn-sm" name="update" type="submit">Update</button>
						<button class="btn btn-secondary btn-sm" name="cancel">Batal</button>
					</div>
				</div>
			</div>
		</form>
		
	</div>
</div>
