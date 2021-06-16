<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $banners=Banner::all();

        // dd($banners);

        // $banners=Banner::all()->count(); count data in database

       //dd($banners);  dd One of the most popular way of debugging in PHP still remains the same – showing variables in the browser, Dump and Die

       // return view('Banner.banner', compact('banners')); The compact() function creates an array from variables and their values.

    // $banners=Banner::where('name','p1')->first(); //where query

    //$banners=Banner::find(1);//find data through primry key

    // $banners=Banner::where('name','=','majid')->firstOr
    // (function(){
    //     echo "majid name not found";
    // });
    // $banners=Banner::firstOrCreate(     //firstOrCreat function if data not found then they create data and retrive data
    //     ['name'=>'Majid'],
    //     ['image'=>'banner.jpg']
    // );
    // return view('Banner.banner', compact('banner'));

    $banners=Banner::firstOrNew( //firstOrNew only return object vlaue not save in data if want save then call save()
     ['name'=>'Majid SHAH'],
     ['image'=>'banne.jpg']
    );
    $banners->save();
    return view('Banner.banner',['banners'=>$banners]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
