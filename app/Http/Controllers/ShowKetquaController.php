<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Scraper;

class ShowKetquaController extends Controller
{
    function show(Request $request) {
        $products = DB::table('products')->get();
        return view('showketqua')->with('products', $products);
    }
}
