<?php

namespace App\Http\Controllers;

use App\Tag;
use Validator;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($tagName, Request $request)
    {
        $tagid = Tag::where('tagName', $tagName)->first()->id;
        $panspage = Tag::find($tagid)->pans()->where('permit', 1)->paginate(12);
        $pans = $panspage->chunk(6);
        return view('tag.show', ["tagName" => $tagName, "panspage" => $panspage, "pans" => $pans]);        
    }
    public function delete($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect('manager');
    }
    public function create()
    {
        return view('tag.create');
    }
    public function complete(Request $request)
    {
		$Validator = Validator::make($request->all(), [
            'tagName' =>'required|unique:tags|max:100|',
        ]);

        if($Validator->fails()){
        	return redirect('manager/tag/create')
                ->withErrors($Validator)
                ->withInput($request->all);
        }else{
	    	Tag::create([
	    		'tagName' => $request->tagName,
	    	]);
	    	return redirect('manager');
        }
    }
}
