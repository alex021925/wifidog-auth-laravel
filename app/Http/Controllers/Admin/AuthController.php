<?php
/**
 * Created by PhpStorm.
 * User: Tabares
 * Date: 23/05/2020
 * Time: 11:52
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    use AuthenticatesUsers;

    protected $guard = 'admins';
    protected $redirectTo = '/admin';


    public function showLogin()
    {
//        if(!view()->exists('auth.login')) {
//            return view('auth.login');
//        }
        return view('admin.login');
    }

    public  function login(Request $request)
    {
//        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        if(Auth::guard('admins')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return view('admin.panel');

        }
        return view('admin.login');

    }

    public function ShowRegistrationForm()
    {
        return view('admin.register');

    }

    public function _construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');

    }

}