<?php

namespace App\Http\Controllers;

use App\Api_test;
use App\Blog;
use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    
    public function getData()
    {
       return Blog::all();
    }

    public function createData(Request $req)
    {
        $new = new Blog;
        $new->judul = $req->judul;
        $new->desc  = $req->desc;
        $new->save();

        return "Data Berhasil Disimpan";
    }

    public function readOne($id)
    {
        return Blog::find($id);
    }

    public function editData($id, Request $req)
    {
        $up = Blog::find($id);
        $up->judul = $req->judul;
        $up->desc  = $req->desc;
        $up->save();
        return "Data berhasil di update";
    }

    public function deleteData($id)
    {
        $del = Blog::find($id);
        $del->delete();
        return "Data berhasil di hapus";
    }

}
