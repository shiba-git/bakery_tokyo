<?php

namespace App\Http\Controllers;

use App\User;
use App\Pan;
use App\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pans = Pan::all()->random(6);
        $stores = Store::orderBy('created_at', 'desc')->get();
        return view('top', ['stores' => $stores, 'pans' => $pans]);
    }
}