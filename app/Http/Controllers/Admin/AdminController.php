<?php

/**
 * Created by PhpStorm.
 * User: Tabares
 * Date: 24/05/2020
 * Time: 12:13
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.panel');
    }
}
