<?php

namespace App\Http\Controllers;

use App\Models\Productdetail;
use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "helo index function";
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
     * @param  \App\Models\Productdetail  $productdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Productdetail $productdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productdetail  $productdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Productdetail $productdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productdetail  $productdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productdetail $productdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productdetail  $productdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productdetail $productdetail)
    {
        //
    }
}
