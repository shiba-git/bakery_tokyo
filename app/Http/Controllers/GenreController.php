<?php

namespace App\Http\Controllers;

use App\Genre;
use Validator;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //
    public function show($genreName, Request $request)
    {
        $genreid = Genre::where('genreName', $genreName)->first()->id;
        $panspage = Genre::find($genreid)->pans()->where('permit', 1)->paginate(12);
        $pans = $panspage->chunk(6);
        return view('genre.show', ["genreName" => $genreName, "panspage" => $panspage, "pans" => $pans]);        
    }
    public function delete($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return redirect('manager');
    }
    public function create()
    {
        return view('genre.create');
    }
    public function complete(Request $request)
    {
		$Validator = Validator::make($request->all(), [
            'genreName' =>'required|unique:genres|max:100|',
        ]);

        if($Validator->fails()){
        	return redirect('manager/genre/create')
                ->withErrors($Validator)
                ->withInput($request->all);
        }else{
	    	Genre::create([
	    		'genreName' => $request->genreName,
	    	]);
	    	return redirect('manager');
        }
    }
}
