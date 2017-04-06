<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use DB;
use App\KnowledgeBased;
use Response;

class SearchKnowledgeBaseController extends Controller
{
    public function autocomplete(){
	Log::info('Showing user profile for user: '.request()->input('term'));
	$tags = request()->input('term');
	$results = array();
	
	$queries = KnowledgeBased::where('title', 'LIKE', '%'.$tags.'%')
					->take(5)->get();
	
	foreach ($queries as $query)
	{
	    $results[] = [ 'id' => $query->id, 'value' => $query->title ];
	}
	return Response::json($results);
     }
}
