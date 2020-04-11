<?php

namespace App\Http\Controllers;

use App\User;
use App\Pan;
use Validator;
use Illuminate\Http\Request;

class PanController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	//take(12)->get()->chunk(6);
    	$panspage = Pan::orderBy('created_at', 'desc')->paginate(12);
    	$pans = $panspage->chunk(6);
        return view('pan.index', ['panspage' => $panspage, 'pans' => $pans]);
    }
    public function create()
    {
        return view('pan.create');
    }
    public function complete(Request $request)
    {
		$Validator = Validator::make($request->all(), [
            'image' =>'required|file|image|mimes:jpeg,png',
            'storename' => 'required|max:100',
        	'panname' => 'required|max:100',
        ]);

        if($Validator->fails()){
        	return redirect('pan/create')
                ->withErrors($Validator)
                ->withInput($request->all);
        }else{
	    	$imagepath = $request->image->store('public');
	    	$imagepath_read = str_replace('public/', 'storage/', $imagepath);
	    	Pan::create([
	    		'image' => $imagepath_read,
	    		'storename' => $request->storename,
	    		'panname' => $request->panname,
	    	]);
	    	return view('pan/complete');
        }
    }
}