<?php
/**
 * Created by PhpStorm.
 * User: Tabares
 * Date: 31/05/2020
 * Time: 1:34
 */

namespace App\Http\Controllers;


use sinkcup\LaravelUiSocialite\SocialAccount;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ConsumidorController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'admins';
    protected $redirectTo = '/admin';


    public function __construct()
    {
       // $this->middleware('auth');
        $this->middleware('admin');

    }


    public function consumidores()
    {
        if(Auth::guard('admins')->check()) {
//            $linked_providers = SocialAccount::all();
            $linked_providers = DB::table('social_accounts')->paginate(10);

            return view('usuario/dashboard_usuario', ['linked_providers' => $linked_providers]);
        }
        return view('/');
    }
}