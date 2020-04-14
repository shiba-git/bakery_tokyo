<?php

namespace App\Http\Controllers;

use App\User;
use App\Pan;
use App\Store;
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
    	$panspage = Pan::orderBy('created_at', 'desc')->where('permit', '1')->paginate(12);
    	$pans = $panspage->chunk(6);
        return view('pan.index', ['panspage' => $panspage, 'pans' => $pans]);
    }
    public function manager()
    {
    	$pans = Pan::orderBy('created_at', 'desc')->paginate(12); //分割する必要がない,変数に気を付ける
        return view('manager.index', ['pans' => $pans]);
    }
    public function delete($id)
    {
    	$pan = Pan::findOrFail($id);
        $pan->delete();
        return redirect('manager');
    }
    public function edit($id)
    {
    	$pan = Pan::findOrFail($id);
        $stores = Store::all();
        return view('manager.edit', ['pan' => $pan, 'stores'=> $stores]);
    }
    public function upload(Request $request, $id)
    {
        $pan = Pan::findOrFail($id);
        $pan->fill($request->all());
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagepath = $request->image->store('public');
            $imagepath_read = str_replace('public/', '/storage/', $imagepath);
            $pan->image = $imagepath_read;
        }
        $pan->save();
        return redirect('manager')
            ->with(['pan' => $pan]); //元のページ戻す
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
            $file_name = $request->file('image')->getClientOriginalName();
            $date = date("Ymd_Hi_");
            $file_name_date = $date . $file_name;
	    	$imagepath = $request->file('image')->storeAs('public/', $file_name_date);
	    	// $imagepath_read = str_replace('public/', '/storage/', $imagepath);
	    	Pan::create([
	    		'image' => $file_name_date,
	    		'storename' => $request->storename,
	    		'panname' => $request->panname,
                'instagramid'=> $request->instagramid,
	    	]);
	    	return view('pan/complete');
        }
    }


}