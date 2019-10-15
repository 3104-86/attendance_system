<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;  

class HomeController extends Controller
{
    /**
     * ログインしていない場合はログインページへ移動
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
        // ログインユーザを取得する
        $user = \Auth::user();
        return view('home', ['user' => $user]);

    }

    /**
     * 日時の取得
     * 
     * @return date
     */
    public function getDateAttribute()
    {
        $carbon = new Carbon($this->create_at);
        $date = $carbon->isoFormat('YYYY年MM月DD日 LTS (ddd)');

        return $date;
    }
}
