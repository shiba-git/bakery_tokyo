<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function latlen(Request $request)
    {
    	$date = $request->latlng;
        return view('search.index', ['date' => $date]);
    }
}
