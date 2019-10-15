<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * 日時の取得
     */
    public function getDateAttribute()
    {
        $carbon = new Carbon($this->create_at);
        $date = $carbon->isoFormat('YYYY年MM月DD日 LTS (ddd)');

        return $date;
    }
}
