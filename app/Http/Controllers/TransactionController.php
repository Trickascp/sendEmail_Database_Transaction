<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class TransactionController extends Controller
{
    
	public function __invoke(Request $req)
	{

		DB::transaction(function() use ($req){

			$ammount = $req->nominal;
			$from = Auth::user()->id;
			$to   = $req->usr;

			User::where("id", $from)->decrement("modal", $ammount);
			User::where("id", $to)->increment("modal", $ammount);

		});

		return back();

	}

}
