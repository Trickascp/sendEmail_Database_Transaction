<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Kategori;
use App\Chart;
use App\Charts\Alumni;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
         $uwu = Blog::orderBy('id', 'DESC')->get();
         $kate = Kategori::all();
         return view('artikel')->withUwu($uwu)
                               ->withKate($kate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function chart()
    // {

    //     $alum1 = Chart::select(DB::raw("tahun, status, count(*) as number FROM alumni GROUP BY status, tahun"));
    //     $alum2 = Chart::where('tahun', '2018')->count();
    //     $alum3 = Chart::where('tahun', '2019')->count();


    //     $data = new Alumni;
    //     $data->labels(['2017','2018','2019']);
    //     $data->dataset('Bekerja', 'line', [1, 2, 2]);
    //     $data->dataset('Kuliah', 'line', [3, 1, 2]);

    //     return view('welcome', ['data' => $data]);
    // }

    public function tkt($id)
    {
        $blog = Blog::where('id_ktg', $id)->get();
        return view('kate')->withUwu($blog);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
