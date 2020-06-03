<?php
/**
 * Created by PhpStorm.
 * User: Tabares
 * Date: 02/06/2020
 * Time: 4:18
 */

namespace App\Http\Controllers\Admin;

use sinkcup\LaravelUiSocialite\SocialAccount;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ConsumidorController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'admins';
    protected $redirectTo = '/admin';


    public function __construct()
    {
        //$this->middleware('admin.guest');
        //    $this->middleware('admin');

    }


    public function consumidores()
    {
        if(Auth::guard('admins')->check()) {
//            $linked_providers = SocialAccount::all();
            $linked_providers = DB::table('social_accounts')
                ->paginate(10);

            return view('usuario/dashboard_usuario', ['linked_providers' => $linked_providers]);
        }
        return view('/admin');
    }

    public function  filtro_google()
    {
        if(Auth::guard('admins')->check()) {

            $google_providers = DB::table('social_accounts')
                ->where('provider', '=', 'Google')
                ->paginate(10);
            return view('usuario/dashboard_usuario', ['linked_providers' => $google_providers]);
        }
        return view('admin.login');

    }


    public function  filtro_facebook()
    {
        if(Auth::guard('admins')->check()) {

            $facebook_providers = DB::table('social_accounts')
                ->where('provider', '=', 'Facebook')
                ->paginate(10);

            return view('usuario/dashboard_usuario', ['linked_providers' => $facebook_providers]);
        }

        return view('admin.login');

    }
}