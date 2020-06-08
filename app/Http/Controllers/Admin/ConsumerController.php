<?php
/**
 * Created by PhpStorm.
 * User: Tabares
 * Date: 31/05/2020
 * Time: 1:34
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ConsumerController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }


    public function consumers()
    {
        $linked_providers = DB::table('social_accounts')->paginate(10);
        return view('usuario/dashboard_usuario', ['linked_providers' => $linked_providers]);
    }

    public function googleFilter()
    {
        $google_providers = DB::table('social_accounts')
            ->where('provider', '=', 'Google')
            ->paginate(10);
        return view('usuario/dashboard_usuario', ['linked_providers' => $google_providers]);
    }


    public function facebookFilter()
    {
        $facebook_providers = DB::table('social_accounts')
            ->where('provider', '=', 'Facebook')
            ->paginate(10);

        return view('usuario/dashboard_usuario', ['linked_providers' => $facebook_providers]);
    }
}
