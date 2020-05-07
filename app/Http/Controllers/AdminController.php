<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Admin;
use App\RW;
use App\RT;
use App\KepalaKeluarga;
use App\Keluarga;

class AdminController extends Controller
{
    function index(){
    	if(!empty(Session::get('admin'))){
    		$RW = RW::get();
            $RT = RT::get();
            $KK = KepalaKeluarga::get();
            $K = Keluarga::get();
    		return view('layout.admin')->with(compact('RW',$RW))->with(compact('RT',$RT))->with(compact('KK',$KK))->with(compact('K',$K));
    	}
    	else{
    		return redirect(url('/'));
    	}
    }
    function tambahRw(Request $request){
        if(!empty(Session::get('admin'))){
            $this->validate($request,[
                'nama_lengkap' => 'required',
                'no_rw' => 'required|integer',
                'no_nik' => 'required|integer',
                'no_kk' => 'required|integer',
                'ttl' => 'required',
                'jenis_kelamin' => 'required',
                'golongan_darah' => 'required',
                'alamat' => 'required',
                'agama' => 'required',
                'status_perkawinan' => 'required'
            ]);

            $nama_lengkap = $request->input('nama_lengkap');
            $no_rw = $request->input('no_rw');
            $no_nik = $request->input('no_nik');
            $no_kk = $request->input('no_kk');
            $ttl = $request->input('ttl');
            $jenis_kelamin = $request->input('jenis_kelamin');
            $golongan_darah = $request->input('golongan_darah');
            $alamat = $request->input('alamat');
            $agama = $request->input('agama');
            $status_perkawinan = $request->input('status_perkawinan');


            $data = RW::insert([
                'nama_lengkap' => $nama_lengkap,
                'no_rw' => $no_rw,
                'no_nik' => $no_nik,
                'no_kk' => $no_kk,
                'ttl' => $ttl,
                'jenis_kelamin' => $jenis_kelamin,
                'golongan_darah' => $golongan_darah,
                'alamat' => $alamat,
                'agama' => $agama,
                'status_perkawinan' => $status_perkawinan,
                'created_at' => now()
            ]);

            if($data){
                return back();
            }
            else{
                return back()->withErrors(['error' => 'Error ketika menginput data ke database!']);
            }
        }
        else{
            return redirect(url('/'));
        }
    }

    function tambahRt(Request $request){
        if(!empty(Session::get('admin'))){
            $this->validate($request,[
                'nama_lengkap' => 'required',
                'no_rt' => 'required|integer',
                'no_nik' => 'required|integer',
                'no_kk' => 'required|integer',
                'ttl' => 'required',
                'jenis_kelamin' => 'required',
                'golongan_darah' => 'required',
                'alamat' => 'required',
                'agama' => 'required',
                'status_perkawinan' => 'required',
                'rw_id' => 'required|integer'
            ]);

            $nama_lengkap = $request->input('nama_lengkap');
            $rw_id = $request->input('rw_id');
            $no_rt = $request->input('no_rt');
            $no_nik = $request->input('no_nik');
            $no_kk = $request->input('no_kk');
            $ttl = $request->input('ttl');
            $jenis_kelamin = $request->input('jenis_kelamin');
            $golongan_darah = $request->input('golongan_darah');
            $alamat = $request->input('alamat');
            $agama = $request->input('agama');
            $status_perkawinan = $request->input('status_perkawinan');

            $data = RT::insert([
                'nama_lengkap' => $nama_lengkap,
                'no_rt' => $no_rt,
                'no_nik' => $no_nik,
                'no_kk' => $no_kk,
                'ttl' => $ttl,
                'jenis_kelamin' => $jenis_kelamin,
                'golongan_darah' => $golongan_darah,
                'alamat' => $alamat,
                'agama' => $agama,
                'status_perkawinan' => $status_perkawinan,
                'rw_id' => $rw_id,
                'created_at' => now()
            ]);

            if($data){
                return back();
            }
            else{
                return back()->withErrors(['error' => 'Error ketika menginput data ke database!']);
            }
        }
        else{
            return redirect(url('/'));
        }
    }

    function tambahKk(Request $request){
        if(!empty(Session::get('admin'))){
            $this->validate($request, [
                'nama_lengkap' => 'required',
                'no_nik' => 'required|integer',
                'no_kk' => 'required|integer',
                'ttl' => 'required',
                'jenis_kelamin' => 'required',
                'golongan_darah' => 'required',
                'alamat' => 'required',
                'agama' => 'required',
                'status_perkawinan' => 'required',
                'pekerjaan' => 'required',
                'kewarganegaraan' => 'required',
                'rt_id' => 'required|integer',
                'rw_id' => 'required|integer'
            ]);

            $nama_lengkap = $request->input('nama_lengkap');
            $rt_id = $request->input('rt_id');
            $rw_id = $request->input('rw_id');
            $no_rt = $request->input('no_rt');
            $no_nik = $request->input('no_nik');
            $no_kk = $request->input('no_kk');
            $ttl = $request->input('ttl');
            $jenis_kelamin = $request->input('jenis_kelamin');
            $golongan_darah = $request->input('golongan_darah');
            $alamat = $request->input('alamat');
            $agama = $request->input('agama');
            $status_perkawinan = $request->input('status_perkawinan');
            $pekerjaan = $request->input('pekerjaan');
            $kewarganegaraan = $request->input('kewarganegaraan');

            $data = KepalaKeluarga::insert([
                'nama_lengkap' => $nama_lengkap,
                'no_nik' => $no_nik,
                'no_kk' => $no_kk,
                'ttl' => $ttl,
                'jenis_kelamin' => $jenis_kelamin,
                'golongan_darah' => $golongan_darah,
                'alamat' => $alamat,
                'agama' => $agama,
                'status_perkawinan' => $status_perkawinan,
                'pekerjaan' => $pekerjaan,
                'kewarganegaraan' => $kewarganegaraan,
                'rt_id' => $rt_id,
                'rw_id' => $rw_id,
                'created_at' => now()
            ]);

            if($data){
                return back();
            }
            else{
                return back()->withErrors(['error' => 'Error ketika menginput data ke database!']);
            }
        }
        else{
            return redirect(url('/'));
        }
    }

    function tambahKeluarga(Request $request){
        if(!empty(Session::get('admin'))){
            $this->validate($request, [
                'nama_lengkap' => 'required',
                'no_nik' => 'required|integer',
                'ttl' => 'required',
                'jenis_kelamin' => 'required',
                'golongan_darah' => 'required',
                'agama' => 'required',
                'status_perkawinan' => 'required',
                'pekerjaan' => 'required',
                'kewarganegaraan' => 'required',
                'kepala_keluarga_id' => 'required|integer'
            ]);

            $nama_lengkap = $request->input('nama_lengkap');
            $kepala_keluarga_id = $request->input('kepala_keluarga_id');
            $no_nik = $request->input('no_nik');
            $ttl = $request->input('ttl');
            $jenis_kelamin = $request->input('jenis_kelamin');
            $golongan_darah = $request->input('golongan_darah');
            $agama = $request->input('agama');
            $status_perkawinan = $request->input('status_perkawinan');
            $pekerjaan = $request->input('pekerjaan');
            $kewarganegaraan = $request->input('kewarganegaraan');

            $data = Keluarga::insert([
                'nama_lengkap' => $nama_lengkap,
                'no_nik' => $no_nik,
                'ttl' => $ttl,
                'jenis_kelamin' => $jenis_kelamin,
                'golongan_darah' => $golongan_darah,
                'agama' => $agama,
                'status_perkawinan' => $status_perkawinan,
                'pekerjaan' => $pekerjaan,
                'kewarganegaraan' => $kewarganegaraan,
                'kepala_keluarga_id' => $kepala_keluarga_id,
                'created_at' => now()
            ]);

            if($data){
                return back();
            }
            else{
                return back()->withErrors(['error' => 'Error ketika menginput data ke database!']);
            }
        }
        else{
            return redirect(url('/'));
        }
    }

    //fetch data rw
    function getDataRw(Request $request){
        if(!empty(Session::get('admin'))){
            $id = $request->post('id');
            $this->validate($request,[
                'id' => 'required|integer'
            ]);

            $data = RW::where('id',$id)->get();

            return $data;
        }
        else{
            return redirect(url('/'));
        }
    }
    //fetch data rt
    function getDataRt(Request $request){
        if(!empty(Session::get('admin'))){
            $id = $request->post('id');
            $this->validate($request,[
                'id' => 'required|integer'
            ]);

            $data = RT::where('id',$id)->get();

            return $data;
        }
        else{
            return redirect(url('/'));
        }
    }
    //fetch data kepala keluarga
    function getDataKk(Request $request){
        if(!empty(Session::get('admin'))){
            $id = $request->post('id');
            $this->validate($request,[
                'id' => 'required|integer'
            ]);

            $data = KepalaKeluarga::where('id',$id)->get();

            return $data;
        }
        else{
            return redirect(url('/'));
        }
    }
    //fetch data keluarga
    function getDataK(Request $request){
        if(!empty(Session::get('admin'))){
            $id = $request->post('id');
            $this->validate($request,[
                'id' => 'required|integer'
            ]);

            $data = Keluarga::where('id',$id)->get();

            return $data;
        }
        else{
            return redirect(url('/'));
        }
    }

    //fungsi edit data rw
    function editDataRw(Request $request){
        if(!empty(Session::get('admin'))){
            $this->validate($request,[
                'nama_lengkap' => 'required',
                'no_rw' => 'required|integer',
                'no_nik' => 'required|integer',
                'no_kk' => 'required|integer',
                'ttl' => 'required',
                'jenis_kelamin' => 'required',
                'golongan_darah' => 'required',
                'alamat' => 'required',
                'agama' => 'required',
                'status_perkawinan' => 'required',
                'data-id' => 'required|integer'
            ]);

            $nama_lengkap = $request->input('nama_lengkap');
            $no_rw = $request->input('no_rw');
            $no_nik = $request->input('no_nik');
            $no_kk = $request->input('no_kk');
            $ttl = $request->input('ttl');
            $jenis_kelamin = $request->input('jenis_kelamin');
            $golongan_darah = $request->input('golongan_darah');
            $alamat = $request->input('alamat');
            $agama = $request->input('agama');
            $status_perkawinan = $request->input('status_perkawinan');
            $id = $request->input('data-id');


            $data = RW::where('id',$id)->update([
                'nama_lengkap' => $nama_lengkap,
                'no_rw' => $no_rw,
                'no_nik' => $no_nik,
                'no_kk' => $no_kk,
                'ttl' => $ttl,
                'jenis_kelamin' => $jenis_kelamin,
                'golongan_darah' => $golongan_darah,
                'alamat' => $alamat,
                'agama' => $agama,
                'status_perkawinan' => $status_perkawinan
            ]);

            if($data){
                return back();
            }
            else{
                return back()->withErrors(['error' => 'Error ketika menginput data ke database!']);
            }
        }
        else{
            return redirect(url('/'));
        }
    }
    //edit data rt 
    function editDataRt(Request $request){
       if(!empty(Session::get('admin'))){
            $this->validate($request,[
                'nama_lengkap' => 'required',
                'no_rt' => 'required|integer',
                'no_nik' => 'required|integer',
                'no_kk' => 'required|integer',
                'ttl' => 'required',
                'jenis_kelamin' => 'required',
                'golongan_darah' => 'required',
                'alamat' => 'required',
                'agama' => 'required',
                'status_perkawinan' => 'required',
                'data-id' => 'required|integer',
                'rw_id' => 'required|integer'
            ]);

            $nama_lengkap = $request->input('nama_lengkap');
            $no_rt = $request->input('no_rt');
            $no_nik = $request->input('no_nik');
            $no_kk = $request->input('no_kk');
            $ttl = $request->input('ttl');
            $jenis_kelamin = $request->input('jenis_kelamin');
            $golongan_darah = $request->input('golongan_darah');
            $alamat = $request->input('alamat');
            $agama = $request->input('agama');
            $status_perkawinan = $request->input('status_perkawinan');
            $id = $request->input('data-id');
            $rw_id = $request->input('rw_id');

            $data = RT::where('id',$id)->update([
                'nama_lengkap' => $nama_lengkap,
                'no_rt' => $no_rt,
                'no_nik' => $no_nik,
                'no_kk' => $no_kk,
                'ttl' => $ttl,
                'jenis_kelamin' => $jenis_kelamin,
                'golongan_darah' => $golongan_darah,
                'alamat' => $alamat,
                'agama' => $agama,
                'status_perkawinan' => $status_perkawinan,
                'rw_id' => $rw_id
            ]);

            if($data){
                return back();
            }
            else{
                return back()->withErrors(['error' => 'Error ketika menginput data ke database!']);
            }
        }
        else{
            return redirect(url('/'));
        }
    }

    function editDataKk(Request $request){
         if(!empty(Session::get('admin'))){
            $this->validate($request,[
                'nama_lengkap' => 'required',
                'no_nik' => 'required|integer',
                'no_kk' => 'required|integer',
                'no_rt' => 'required|integer',
                'no_rw' => 'required|integer',
                'ttl' => 'required',
                'jenis_kelamin' => 'required',
                'golongan_darah' => 'required',
                'alamat' => 'required',
                'agama' => 'required',
                'status_perkawinan' => 'required',
                'pekerjaan' => 'required',
                'kewarganegaraan' => 'required',
                'data-id' => 'required|integer'
            ]);

            $nama_lengkap = $request->input('nama_lengkap');
            $no_nik = $request->input('no_nik');
            $no_kk = $request->input('no_kk');
            $no_rt = $request->input('no_rt');
            $no_rw = $request->input('no_rw');
            $ttl = $request->input('ttl');
            $jenis_kelamin = $request->input('jenis_kelamin');
            $golongan_darah = $request->input('golongan_darah');
            $alamat = $request->input('alamat');
            $agama = $request->input('agama');
            $status_perkawinan = $request->input('status_perkawinan');
            $pekerjaan = $request->input('pekerjaan');
            $kewarganegaraan = $request->input('kewarganegaraan');
            $id = $request->input('data-id');

            $data = KepalaKeluarga::where('id',$id)->update([
                'nama_lengkap' => $nama_lengkap,
                'no_nik' => $no_nik,
                'no_kk' => $no_kk,
                'rt_id' => $no_rt,
                'rw_id' => $no_rw,
                'ttl' => $ttl,
                'jenis_kelamin' => $jenis_kelamin,
                'golongan_darah' => $golongan_darah,
                'alamat' => $alamat,
                'agama' => $agama,
                'status_perkawinan' => $status_perkawinan,
                'pekerjaan' => $pekerjaan,
                'kewarganegaraan' => $kewarganegaraan,
            ]);

            if($data){
                return back();
            }
            else{
                return back()->withErrors(['error' => 'Error ketika menginput data ke database!']);
            }
        }
        else{
            return redirect(url('/'));
        }
    }

    //fungsi edit data keluarga / warga
    function editDataKeluarga(Request $request){
        if(!empty(Session::get('admin'))){
            $this->validate($request,[
                'nama_lengkap' => 'required',
                'no_nik' => 'required|integer',
                'ttl' => 'required',
                'jenis_kelamin' => 'required',
                'golongan_darah' => 'required',
                'agama' => 'required',
                'status_perkawinan' => 'required',
                'pekerjaan' => 'required',
                'kewarganegaraan' => 'required',
                'kepala_keluarga_id' => 'required|integer',
                'id' => 'required|integer'
            ]);
            $id = $request->input('id');
            $data = Keluarga::where('id',$id)->update([
                'nama_lengkap' => $request->input('nama_lengkap'),
                'no_nik' => $request->input('no_nik'),
                'ttl' => $request->input('ttl'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'golongan_darah' => $request->input('golongan_darah'),
                'agama' => $request->input('agama'),
                'status_perkawinan' => $request->input('status_perkawinan'),
                'pekerjaan' => $request->input('pekerjaan'),
                'kewarganegaraan' => $request->input('kewarganegaraan'),
                'kepala_keluarga_id' => $request->input('kepala_keluarga_id')
            ]);
            
            if($data){
                return back();
            }
            else{
                return back()->withErrors(['errors' => 'Ada masalah ketika mengupdate data!']);
            }
        }
        else{
            return redirect(url('/'))->withErrors(['errors' => 'Harap masuk sebelum melanjutkan !']);
        }
    }

    //fungsi hapus rw
    function hapusRw($id){
        if(!empty(Session::get('admin'))){
            $data = RW::where('id',$id)->delete();
            if($data){
                return back();
            }
            else{
                return back()->withErrors(['errors' => 'Ups!, Ada masalah ketika menghapus data ini!']);
            }
        }
        else{
            return redirect(url('/'))->withErrors(['errors' => 'Harap masuk terlebih dahulu sebelum melanjutkan !']);
        }
    }

    //fungsi hapus rt
    function hapusRt($id){
        if(!empty(Session::get('admin'))){
            $data = RT::where('id',$id)->delete();
            if($data){
                return back();
            }
            else{
                return back()->withErrors(['errors' => 'Ups!, Ada masalah ketika menghapus data ini!']);
            }
        }
        else{
            return redirect(url('/'))->withErrors(['errors' => 'Harap masuk terlebih dahulu sebelum melanjutkan !']);
        }
    }

    //fungsi hapus kepala keluarga
    function hapusKk($id){
        if(!empty(Session::get('admin'))){
            $data = KepalaKeluarga::where('id',$id)->delete();
            if($data){
                return back();
            }
            else{
                return back()->withErrors(['errors' => 'Ups!, Ada masalah ketika menghapus data ini!']);
            }
        }
        else{
            return redirect(url('/'))->withErrors(['errors' => 'Harap masuk terlebih dahulu sebelum melanjutkan !']);
        }
    }

    //fungsi hapus rw
    function hapusK($id){
        if(!empty(Session::get('admin'))){
            $data = Keluarga::where('id',$id)->delete();
            if($data){
                return back();
            }
            else{
                return back()->withErrors(['errors' => 'Ups!, Ada masalah ketika menghapus data ini!']);
            }
        }
        else{
            return redirect(url('/'))->withErrors(['errors' => 'Harap masuk terlebih dahulu sebelum melanjutkan !']);
        }
    }

    function getDataAdmin(){
        if(!empty(Session::get('admin'))){
            $id = Session::get('admin');
            $data = Admin::where('id',$id)->get();
            return $data;
        }
        else{
            return redirect(url('/'));
        }
    }

    function editDataAdmin(Request $request){
        if(!empty(Session::get('admin'))){
            $username = $request->input('username');
            $password = $request->input('password');
            $passwordConfirmation = $request->input('passwordConfirmation');

            if($password === $passwordConfirmation){
                $data = Admin::where('id',Session::get('admin'))->update([
                    'username' => $username,
                    'password' => md5($password)
                ]);
                if($data){
                    return back();
                }
                else{
                    return back()->withErrors(['Errors' => 'Gagal mengupdate info login admin!']);
                }
            }
            else{
                return back()->withErrors(['Errors' => 'Konfirmasi password tidak benar!']);
            }
            
        }
    }
    //logout
    function logout(){
    	if(!empty(Session::get('admin'))){
    		Session::Flush();
    		return redirect(url('/'));
    	}
    }
}
