<?php

namespace App\Http\Controllers;

use App\Store;
use Validator;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function show($storeName, Request $request)
    {
        $pansid = Store::where('storeName', $storeName)->first()->id;
        $panspage = Store::find($pansid)->pans()->where('permit', 1)->paginate(12);
        $pans = $panspage->chunk(6);
        return view('store.show', ["storeName" => $storeName, "panspage" => $panspage, "pans" => $pans]);        
    }
    public function create()
    {
        return view('store.create');
    }
    public function complete(Request $request)
    {
		$Validator = Validator::make($request->all(), [
            'storeName' =>'required|max:100',
        ]);

        if($Validator->fails()){
        	return redirect('manager/store/create')
                ->withErrors($Validator)
                ->withInput($request->all);
        }else{
	    	Store::create([
	    		'storeName' => $request->storeName,
	    	]);
	    	return redirect('manager');
        }
    }
}
