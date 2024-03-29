<?php

namespace App\Http\Controllers;

use App\User;
use App\Pan;
use App\Store;
use App\Tag;
use App\Genre;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\Filesystem;

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
    public function list()
    {
        $stores = Store::all();
        $tags = Tag::all();
        $genres = Genre::all();
        return view('manager.list',['stores'=> $stores, 'tags' => $tags, 'genres' => $genres]);
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
        $tags = Tag::all();
        $genres = Genre::all();
        return view('manager.edit', ['pan' => $pan, 'stores'=> $stores, 'tags' => $tags, 'genres' => $genres]);
    }
    public function upload(Request $request, $id)
    {
        $pan = Pan::findOrFail($id);
        $pan->fill($request->all());
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file_name = $request->file('image')->getClientOriginalName();
            $date = date("Ymd_Hi_");
            $file_name_date = $date . $file_name;
            $file = $request->file('image');
            $imagepathS3 = Storage::disk('s3')->putFileAs('/storage', $file, $file_name_date, 'public');
            $imagepath = str_replace('storage/', '', $imagepathS3);
            $pan->image = $imagepath;        } //パスを変更
        $pan->tags()->sync($request->tag);
        $pan->save();
        return redirect('manager')
            ->with(['pan' => $pan]); //元のページ戻す
    }
    public function create()
    {
        $tags = Tag::all();
        return view('pan.create', ['tags' => $tags]);
    }
    public function complete(Request $request)
    {
		$Validator = Validator::make($request->all(), [
            'image' =>'required|file|image|mimes:jpeg,png',
            'storename' => 'required|max:100',
        	'panname' => 'required|max:100',
            'tag' => 'required',
        ]);
        
        if($Validator->fails()){
            $all = $request->all();
            // var_dump($request->tag);
            // echo $all;
        	return redirect('pan/create')
                ->withErrors($Validator)
                ->withInput($request->all);
        }else{
            $file_name = $request->file('image')->getClientOriginalName();
            $date = date("Ymd_Hi_");
            $file_name_date = $date . $file_name;
            $file = $request->file('image');
            //$path = Storage::disk('s3')->putFileAs('/', $file, 'hoge.jpg', 'public');
	    	//$imagepath = $request->file('image')->storeAs('public/', $file_name_date);
            $imagepath = Storage::disk('s3')->putFileAs('/storage/', $file, $file_name_date, 'public');
	    	// $imagepath_read = str_replace('public/', '/storage/', $imagepath);

	    	$id = Pan::create([
	    		'image' => $file_name_date,
	    		'storename' => $request->storename,
	    		'panname' => $request->panname,
                'instagramid'=> $request->instagramid,
	    	]);
            $id->tags()->sync($request->tag);
	    	return view('pan/complete');
        }
    }


}