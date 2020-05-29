<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
	public function index ()
	{
		return view('register.index');
	}
    public function register (RegistrationRequest $request)
    {
        $admin = new Admin();
        
        $admin->name        = $request->name;
        $admin->username    = $request->username;
        $admin->email       = $request->email;
        $admin->password    = $request->password;
        $admin->type        = 'admin';
        
        $admin->save();
        
        return redirect()->route('admin.index');
    }
}
