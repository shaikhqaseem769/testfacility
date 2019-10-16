<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('home');
    }

    /**
     * Show the application setting.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function settings()
    {
        $time_zones = ['white','black','green','pink','red','maroon','aqua','grey'];
        return view('settings')->with(compact('time_zones'));
    }

    /**
     * save the application setting.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function saveSettings(Request $request)
    {
        \DB::table('user_settings')->updateOrInsert(
            ['user_id' => Auth::id()],
            ['user_id' => Auth::id(),'theme'=>$request->get('theme')]
        );

        session()->put('theme',$request->get('theme'));
        return redirect()->to('settings');
    }
}
