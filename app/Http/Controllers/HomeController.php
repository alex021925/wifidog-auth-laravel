<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $token = $user->api_token;
        $data = [
            'msg' => 'auth.logged_in','msg1'=>'Bienvenido al Portal Wifi',
        ];
        if (session('gw_address') && session('gw_port')) {
            $data['wifidog_uri'] = "http://{session('gw_address')}:{session('gw_port')}/wifidog/auth?token={$token}";
        }
        return view('home', $data);
    }

    public function google()
    {



        return redirect()->to('https://www.google.com');
    }

    public function gmail()
    {



        return redirect()->to('https://www.mail.google.com');
    }

    public function facebook()
    {



        return redirect()->to('https://www.facebook.com');
    }

}
