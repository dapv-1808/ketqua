<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Scraper\xosoScraper;

class XosoController extends Controller
{
    function show(Request $request) {
        $xosos = DB::table('xosos')->get();
        return view('showxoso')->with('xosos', $xosos);
    }

    function get(Request $request, $day) {
        DB::table('xosos')->delete();
        $xoso = new xosoScraper();
        $xoso->scrape($day);
        $xosos = DB::table('xosos')->get();
        return view('showxoso', compact("xosos", 0, "day"));
    }

    function update(Request $request, $numberShow) {
        $xosos = DB::table('xosos')->get();
        $data=array(
            'numberShow' => $numberShow,
            'xosos' => $xosos
        );
        return view('showxoso')->with($data);
    }
}
