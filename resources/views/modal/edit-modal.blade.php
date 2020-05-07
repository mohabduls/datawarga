<!--Modal Edit RW-->
<div class="iziModal" id="modal-editrw" data-iziModal-title="Edit Data RW">
	<div class="p-3">
		<form class="form-group" method="post" action="{{url('edit/rw')}}">
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
						<option value="Lajang">Lajang</option>
						<option value="Duda">Duda</option>
						<option value="Menikah">Menikah</option>
						<option value="Cerai">Cerai</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
			</div>
			<input type="hidden" name="data-id">
			<div class="clearfix">
				<div class="float-right">
					<button class="btn btn-outline-success btn-outline btn-sm">Edit</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!--Modal Edit RT-->
<div class="iziModal" id="modal-editrt" data-iziModal-title="Edit Data RT">
	<div class="p-3">
		<form class="form-group" method="post" action="{{url('edit/rt')}}">
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
				<select class="form-control" name="rw_id">
					@foreach($RW as $dataRw)
					<option value="{{$dataRw->id}}">{{$dataRw->no_rw}} - {{$dataRw->nama_lengkap}}</option>
					@endForeach
				</select>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No KK</label>
				<input class="form-control" type="number" name="no_kk" required>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No NIK</label>
				<input class="form-control" type="number" name="no_nik" required>
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
						<option value="Lajang">Lajang</option>
						<option value="Duda">Duda</option>
						<option value="Menikah">Menikah</option>
						<option value="Cerai">Cerai</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
			</div>
			<input type="hidden" name="data-id">
			<div class="clearfix">
				<div class="float-right">
					<button class="btn btn-outline-success btn-outline btn-sm">Edit</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!--Modal Edit Kepala Keluarga-->
<div class="iziModal" id="modal-editkk" data-iziModal-title="Edit Data Kepala Keluarga">
	<div class="p-3">
		<form class="form-group" method="post" action="{{url('edit/kk')}}">
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
				<label class="form-label">No RT</label>
				<select class="form-control" name="no_rt">
					@foreach($RT as $dataRt)
					<option value="{{$dataRt->id}}">{{$dataRt->no_rt}} - {{$dataRt->nama_lengkap}}</option>
					@endForeach
				</select>
				<small class="text-secondary">Dibutuhkan *</small>
			</div>
			<div class="form-group">
				<label class="form-label">No RW</label>
				<select class="form-control" name="no_rw">
					@foreach($RW as $dataRw)
					<option value="{{$dataRw->id}}">{{$dataRw->no_rw}} - {{$dataRw->nama_lengkap}}</option>
					@endForeach
				</select>
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
						<option value="Lajang">Lajang</option>
						<option value="Duda">Duda</option>
						<option value="Menikah">Menikah</option>
						<option value="Cerai">Cerai</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
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
			<input type="hidden" name="data-id">
			<div class="clearfix">
				<div class="float-right">
					<button class="btn btn-outline-success btn-outline btn-sm">Edit</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!--Modal Edit Data Keluarga / Warga-->
<div class="iziModal" id="modal-editkeluarga" data-iziModal-title="Edit Data Kepala Keluarga">
	<div class="p-3">
		<form class="form-group" method="post" action="{{url('edit/k')}}">
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
				<label class="form-label">Kepala Keluarga</label>
				<select class="form-control" name="kepala_keluarga_id">
					@foreach($KK as $dataKk)
					<option value="{{$dataKk->id}}">{{$dataKk->nama_lengkap}}</option>
					@endForeach
				</select>
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
						<option value="Lajang">Lajang</option>
						<option value="Duda">Duda</option>
						<option value="Menikah">Menikah</option>
						<option value="Cerai">Cerai</option>
					</select>
					<small class="text-secondary">Dibutuhkan *</small>
				</div>
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
			<input type="hidden" name="id">
			<div class="clearfix">
				<div class="float-right">
					<button class="btn btn-outline-success btn-outline btn-sm">Edit</button>
				</div>
			</div>
		</form>
	</div>
</div>