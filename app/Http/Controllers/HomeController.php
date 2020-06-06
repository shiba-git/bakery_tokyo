<?php

namespace App\Http\Controllers;

use App\User;
use App\Pan;
use App\Store;
use App\Tag;
use App\Genre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   // ->random(6);
        $pans = Pan::all()->where('permit', '1')->random(6);
        $stores = Store::orderBy('created_at', 'desc')->get();
        $tags = Tag::orderBy('created_at', 'desc')->get();
        $genres = Genre::all();
        return view('top', ['stores' => $stores, 'pans' => $pans, 'tags' => $tags, 'genres' => $genres]);
    }
    public function key()
    {
        $count = Pan::all()->where('permit', '1')->count();
        return view('key.index', ['count' => $count]);
    }
    public function purchase()
    {
        return view('purchase.index');
    }
    public function type()
    {
        return view('pan.type');
    }
    public function new()
    {
        return view('new.index');
    }
}