<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kategori;

class QRController extends Controller
{
    

	public function qr($id)
	{


		$id = Kategori::where('id', $id)->get();


		return view('qrcode.qr')->withKate($id);
	}


}
