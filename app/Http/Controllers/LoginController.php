<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Admin;

//hash
use Hash;
use Validator;

class LoginController extends Controller
{
	//halama login
	function index(){
		if(!empty(Session::get('admin'))){
			return redirect(url('/admin'));
		}
		else{
			return view('layout.login');
		}
	}
	function auth(Request $request){
		if(!empty(Session::get('admin'))){
			return redirect(url('/admin'));
		}
		else{
			$username = $request->input('username');
			$password = $request->input('password');
			$rules = [
				'username' => 'required|min:5',
				'password' => 'required|min:5'
			];
			$validator = Validator::make($request->all(), $rules);

			if($validator->fails()){
				return back()->withErrors(['errors' => 'Username atau Password salah!','Username dan Password minimal 5 karakter!']);
			}
			else{
				$data = Admin::where('username',$username)->first();

				if($data){
					if(md5($password) == $data->password){
						Session::put('admin',$data->id);
						return redirect(url('admin'));
					}
					else{
						return back()->withErrors(['errors' => 'Username atau Password salah!']);
					}
				}
				else{
					return back()->withErrors(['errors' => 'Username atau Password salah!']);
				}
			}
		}
		
	}
}
