<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Mesa;
use App\Http\Requests;

class GroupController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
    	Group::create($request->all());
        return redirect()->back();
    }

    public function show(Request $request)
    {
    	$grupo = Group::where('mesa_id',$request->get('mesa_id'))->get();
    	if ($request->ajax()) {
            //echo $request->all();     
            return response()->json(
	            $grupo->toArray()
	        );
        }	
    }

}
