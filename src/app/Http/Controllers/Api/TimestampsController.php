<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Timestamp;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class TimestampsController extends Controller
{
    /**
     * Timestampテーブルにレコード追加
     */
    public function punchin()
    {

        // 時間の取得
        $mutable = Carbon::now();

        DB::table('timestamps')->insert(
            ['punchIn' => $mutable] 
        );
        return view('home', $mutable);
    }
}
