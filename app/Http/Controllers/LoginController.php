<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
	public function index(Request $request){
		
		return view('login.index');
	}
	
	public function verify(Request $request){
		
		$username = $request->username;
		$password = $request->password;
		
		$user = DB::table('admins')
			->where('username', $username)
			->where('password', $password)
			->first();
		
		if ($user != null)
		{
			$request->session()->put('logged', $user);
			return redirect()->route('admin.index');
		}
		else
		{
			return redirect()->route('login.index');
		}
	}
}
