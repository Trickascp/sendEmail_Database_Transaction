<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Auth;

class EmailController extends Controller
{
    public function send(Request $req)
    {
    	$data = array(
    		"email" => $req->email,
    		"msg"  => $req->msg
    	);

    	Mail::to($data['email'])->send(new SendEmail($data));
    	return back();

    }
}
