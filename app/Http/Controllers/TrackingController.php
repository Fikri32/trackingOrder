<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracking;

class TrackingController extends Controller
{
    public function index(Request $request)
    {
        $po = $request->po;
        $tracking = [];

        $tracking = Tracking::where('no_po',$po)->first();
        // dd($tracking);
        return view('tracking',compact('tracking'));
    }

    public function cari()
    {
       
    }
}
