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

        $api_id = Store::where('storeName', $storeName)->first()->api_id;

        $url = 'https://api.gnavi.co.jp/RestSearchAPI/v3/';
        $keyid = config('app.api_key');

        $client = new \GuzzleHttp\Client();
        $response = $client->request("GET", $url, 
            [ 'query' => 
                [
                 'keyid' => $keyid,
                 'id' => $api_id,
                ]
            ] 
        );

        $posts = $response->getBody();
        $posts = json_decode($posts, true);

        return view('store.show', ["storeName" => $storeName, "panspage" => $panspage, "pans" => $pans, "posts" => $posts]);
    }
    public function delete($id)
    {
        $store = Store::findOrFail($id);
        $store->delete();
        return redirect('manager');
    }
    public function create()
    {
        return view('store.create');
    }
    public function complete(Request $request)
    {
		$Validator = Validator::make($request->all(), [
            'storeName' =>'required|max:100',
            'api_id' =>'required|max:100',
        ]);

        if($Validator->fails()){
        	return redirect('manager/store/create')
                ->withErrors($Validator)
                ->withInput($request->all);
        }else{
	    	Store::create([
	    		'storeName' => $request->storeName,
                'api_id' => $request->api_id,
	    	]);
	    	return redirect('manager');
        }
    }
}
