<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\irequests;
class StatusController extends Controller
{
    public function status()
    {
        //
        return view('statuscheck');
    }
    public function reqList()
    {
        //
        $reqs = irequests::all();

        return view('reqList',compact('reqs'));
    }


    public function statfetch( $reqID,$mob )
    {
            $freq = irequests::where('mobile',$mob)->find($reqID);
            return view('statBox',['freq' => $freq]);
    }
}
