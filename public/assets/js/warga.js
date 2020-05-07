$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN' : $("meta[name=csrf_token]").attr('content')
	}
});

$(document).ready(function(){
	$("#RWTable").DataTable();
	$("#RTTable").DataTable();
	$("#KKTable").DataTable();
	$("#KTable").DataTable();
});

function tambahRw(){
	var modal = $("#modal-tambahrw");
	modal.iziModal();
	modal.iziModal('open');
	modal.iziModal('setHeaderColor','#0077FF');
	modal.iziModal('setTransitionIn','fadeInUp');
	modal.iziModal('setTransitionOut','fadeOutDown');
}

function tambahRt(){
	var modal = $("#modal-tambahrt");
	modal.iziModal();
	modal.iziModal('open');
	modal.iziModal('setHeaderColor','#0077FF');
	modal.iziModal('setTransitionIn','fadeInUp');
	modal.iziModal('setTransitionOut','fadeOutDown');
}

function tambahKk(){
	var modal = $("#modal-tambahkk");
	modal.iziModal();
	modal.iziModal('open');
	modal.iziModal('setHeaderColor','#0077FF');
	modal.iziModal('setTransitionIn','fadeInUp');
	modal.iziModal('setTransitionOut','fadeOutDown');
}

function tambahKeluarga(){
	var modal = $("#modal-tambahkeluarga");
	modal.iziModal();
	modal.iziModal('open');
	modal.iziModal('setHeaderColor','#0077FF');
	modal.iziModal('setTransitionIn','fadeInUp');
	modal.iziModal('setTransitionOut','fadeOutDown');
}

//editrw
function editDataRw(dataid){
	var id = dataid.getAttribute('data-id');
	var modal = $("#modal-editrw");
	modal.iziModal();
	modal.iziModal('open');
	modal.iziModal('setHeaderColor','#0077FF');
	modal.iziModal('setTransitionIn','fadeInUp');
	modal.iziModal('setTransitionOut','fadeOutDown');

	//input variable
	var namaLengkap = $("input[name=nama_lengkap]");
	var noRw = $("input[name=no_rw]");
	var noNik = $("input[name=no_nik]");
	var noKk = $("input[name=no_kk]");
	var ttl = $("input[name=ttl]");
	var jenisKelamin = $("select[name=jenis_kelamin]");
	var golonganDarah = $("select[name=golongan_darah]");
	var alamat = $("textarea[name=alamat]");
	var agama = $("select[name=agama]");
	var statusPerkawinan = $("select[name=status_perkawinan]");
	var id_rw = $("input[name=data-id]");

	//loading
	modal.iziModal('startLoading');
	$.post('data/rw',{id:id},function(response){
		modal.iziModal('stopLoading');

		namaLengkap.val(response[0].nama_lengkap);
		noRw.val(response[0].no_rw);
		noNik.val(response[0].no_nik);
		noKk.val(response[0].no_kk);
		ttl.val(response[0].ttl);
		jenisKelamin.val(response[0].jenis_kelamin);
		golonganDarah.val(response[0].golongan_darah);
		alamat.append(response[0].alamat);
		agama.val(response[0].agama);
		statusPerkawinan.val(response[0].status_perkawinan);
		id_rw.val(response[0].id);
	});
}

//fungsi edit data rt
function editDataRt(dataid){
	var id = dataid.getAttribute('data-id');
	var modal = $("#modal-editrt");
	modal.iziModal();
	modal.iziModal('open');
	modal.iziModal('setHeaderColor','#0077FF');
	modal.iziModal('setTransitionIn','fadeInUp');
	modal.iziModal('setTransitionOut','fadeOutDown');

	//input variable
	var namaLengkap = $("input[name=nama_lengkap]");
	var noRt = $("input[name=no_rt]");
	var noRw = $("select[name=no_rw]");
	var noNik = $("input[name=no_nik]");
	var noKk = $("input[name=no_kk]");
	var ttl = $("input[name=ttl]");
	var jenisKelamin = $("select[name=jenis_kelamin]");
	var golonganDarah = $("select[name=golongan_darah]");
	var alamat = $("textarea[name=alamat]");
	var agama = $("select[name=agama]");
	var statusPerkawinan = $("select[name=status_perkawinan]");
	var id_rt = $("input[name=data-id]");

	//loading
	modal.iziModal('startLoading');
	$.post('data/rt',{id:id},function(response){
		modal.iziModal('stopLoading');

		namaLengkap.val(response[0].nama_lengkap);
		noRt.val(response[0].no_rt);
		noRw.val(response[0].rw_id);
		noNik.val(response[0].no_nik);
		noKk.val(response[0].no_kk);
		ttl.val(response[0].ttl);
		jenisKelamin.val(response[0].jenis_kelamin);
		golonganDarah.val(response[0].golongan_darah);
		alamat.append(response[0].alamat);
		agama.val(response[0].agama);
		statusPerkawinan.val(response[0].status_perkawinan);
		id_rt.val(response[0].id);
	});
}

function editDataKk(dataid){
	var id = dataid.getAttribute('data-id');

	var modal = $("#modal-editkk");
	modal.iziModal();
	modal.iziModal('open');
	modal.iziModal('setHeaderColor','#0077FF');
	modal.iziModal('setTransitionIn','fadeInUp');
	modal.iziModal('setTransitionOut','fadeOutDown');

	//input variable
	var namaLengkap = $("input[name=nama_lengkap]");
	var noNik = $("input[name=no_nik]");
	var noKk = $("input[name=no_kk]");
	var noRt = $("select[name=no_rt]");
	var noRw = $("select[name=no_rw]");
	var ttl = $("input[name=ttl]");
	var jenisKelamin = $("select[name=jenis_kelamin]");
	var golonganDarah = $("select[name=golongan_darah]");
	var alamat = $("textarea[name=alamat]");
	var agama = $("select[name=agama]");
	var statusPerkawinan = $("select[name=status_perkawinan]");
	var pekerjaan = $("input[name=pekerjaan]");
	var kewarganegaraan = $("input[name=kewarganegaraan]");
	var data_id = $("input[name=data-id]");

	modal.iziModal('startLoading');
	$.post('data/kk',{id:id},function(response){
		modal.iziModal('stopLoading');

		namaLengkap.val(response[0].nama_lengkap);
		noRt.val(response[0].rt_id);
		noRw.val(response[0].rw_id);
		noNik.val(response[0].no_nik);
		noKk.val(response[0].no_kk);
		ttl.val(response[0].ttl);
		jenisKelamin.val(response[0].jenis_kelamin);
		golonganDarah.val(response[0].golongan_darah);
		alamat.append(response[0].alamat);
		agama.val(response[0].agama);
		statusPerkawinan.val(response[0].status_perkawinan);
		pekerjaan.val(response[0].pekerjaan);
		kewarganegaraan.val(response[0].kewarganegaraan);
		data_id.val(response[0].id);
	});
}

//edit data keluarga
function editDataKeluarga(dataid){
	var id = dataid.getAttribute('data-id');

	var modal = $("#modal-editkeluarga");
	modal.iziModal();
	modal.iziModal('open');
	modal.iziModal('setHeaderColor','#0077FF');
	modal.iziModal('setTransitionIn','fadeInUp');
	modal.iziModal('setTransitionOut','fadeOutDown');

	//input variable
	var namaLengkap = $("input[name=nama_lengkap]");
	var kepalaKeluarga = $("select[name=kepala_keluarga_id]");
	var noNik = $("input[name=no_nik]");
	var ttl = $("input[name=ttl]");
	var jenisKelamin = $("select[name=jenis_kelamin]");
	var golonganDarah = $("select[name=golongan_darah]");
	var agama = $("select[name=agama]");
	var statusPerkawinan = $("select[name=status_perkawinan]");
	var pekerjaan = $("input[name=pekerjaan]");
	var kewarganegaraan = $("input[name=kewarganegaraan]");
	var data_id = $("input[name=id]");

	modal.iziModal('startLoading');
	$.post('data/k',{id:id},function(response){
		modal.iziModal('stopLoading');

		namaLengkap.val(response[0].nama_lengkap);
		kepalaKeluarga.val(response[0].kepala_keluarga_id);
		noNik.val(response[0].no_nik);
		ttl.val(response[0].ttl);
		jenisKelamin.val(response[0].jenis_kelamin);
		golonganDarah.val(response[0].golongan_darah);
		agama.val(response[0].agama);
		statusPerkawinan.val(response[0].status_perkawinan);
		pekerjaan.val(response[0].pekerjaan);
		kewarganegaraan.val(response[0].kewarganegaraan);
		data_id.val(response[0].id);
	});
}

function hapusData(dataid){
	var url = dataid.getAttribute('data-url');
	var modal = $("#modal-hapusdata");
	modal.iziModal();
	modal.iziModal('open');
	modal.iziModal('setHeaderColor','#DC3545');
	modal.iziModal('setTransitionIn','fadeInUp');
	modal.iziModal('setTransitionOut','fadeOutDown');

	var cancel = $("#cancel");
	var next = $("#next");

	cancel.click(function(){
		modal.iziModal('close');
	});

	next.click(function(){
		window.location.href = url;
	});
}

function editPengaturan(){
	var modal = $("#modal-pengaturan");
	modal.iziModal();
	modal.iziModal('open');
	modal.iziModal('setHeaderColor','#17a2b8');
	modal.iziModal('setTransitionIn','fadeInUp');
	modal.iziModal('setTransitionOut','fadeOutDown');

	var username = $("input[name=username]");
	var password = $("input[name=password]");
	var passwordConfirmation = $("input[name=passwordConfirmation]");

	var update = $("button[name=update]");
	var cancel = $("button[name=cancel]");

	modal.iziModal('startLoading');

	$.get('data/admin',function(response){
		modal.iziModal('stopLoading');

		username.val(response[0].username);
	});

	cancel.click(function(){
		modal.iziModal('close');
	});

	update.addClass('disabled');

	passwordConfirmation.on('input',function(){
		if(password.val() === passwordConfirmation.val()){
			update.removeClass('disabled');
		}
		else{
			update.addClass('disabled');
		}
	});

}