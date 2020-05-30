<?php
/**
 * Created by PhpStorm.
 * User: Tabares
 * Date: 24/05/2020
 * Time: 12:13
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // use AuthenticatesUsers;
    public function _construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        return view('admin.login');
    }

}