<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function latlen(Request $request)
    {
    	$url = 'https://api.gnavi.co.jp/RestSearchAPI/v3/';
    	$keyid = config('app.api_key');
    	$lat = $request->lat;
    	$lng = $request->lng;
    	$page = $request->page;
    	$hit_per_page = '12';
    	$freeword = $request->freeword;

		$client = new \GuzzleHttp\Client();
		$response = $client->request("GET", $url, 
			[ 'query' => 
				['keyid' => $keyid,
				 'offset' => '1',
				 'hit_per_page' => $hit_per_page, 
				 'offset_page' => $page, 
				 'input_coordinates_mode' => '1', 
				 'latitude' => $lat, 
				 'longitude' => $lng, 
				 'pref' => 'PREF13', 
				 'category_s' => 'RSFST18007',
				]
			] 
		);

		$posts = $response->getBody();
		$posts = json_decode($posts, true);
		$pagenationSize = ceil($posts['total_hit_count'] / $hit_per_page);
		$posts2 = array_chunk($posts["rest"], 6);
	    return view('search.location', ['posts' => $posts2, 'page' => $page, 'lat' => $lat, 'lng' => $lng, 'pagenationSize' => $pagenationSize]);
	
    }

    public function word(Request $request)
    {
    	$url = 'https://api.gnavi.co.jp/RestSearchAPI/v3/';
    	$keyid = config('app.api_key');
    	$page = $request->page;
    	$hit_per_page = '12';
    	$freeword = $request->freeword;

		$client = new \GuzzleHttp\Client();
		$response = $client->request("GET", $url, 
			[ 'query' => 
				[
					'keyid' => $keyid,
				 	'freeword' => $freeword,
				 	'offset' => '1',
				 	'hit_per_page' => $hit_per_page, 
				 	'offset_page' => $page, 
				 	'pref' => 'PREF13', 
				 	'category_s' => 'RSFST18007',
				],
			  	'http_errors' => false,
			] 
			
		);

		$posts = $response->getBody();
		$posts = json_decode($posts, true);

		if($response->getStatusCode() == 404){
			return view('key.404');
		}else{
			$pagenationSize = ceil($posts['total_hit_count'] / $hit_per_page);
			$posts2 = array_chunk($posts["rest"], 6);
    		return view('search.word', ['posts' => $posts2, 'page' => $page, 'pagenationSize' => $pagenationSize, 'word' => $freeword ]);
    	}
    }

} 
