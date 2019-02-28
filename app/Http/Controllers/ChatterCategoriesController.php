<?php

namespace App\Http\Controllers;

use App\Chatter_categories;
use Illuminate\Http\Request;

class ChatterCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $result = Chatter_categories::all();
        dd($result );
        return view('post.index', compact('result'));
        //
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
     * @param  \App\Chatter_categories  $chatter_categories
     * @return \Illuminate\Http\Response
     */
    public function show(Chatter_categories $chatter_categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chatter_categories  $chatter_categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Chatter_categories $chatter_categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chatter_categories  $chatter_categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chatter_categories $chatter_categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chatter_categories  $chatter_categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chatter_categories $chatter_categories)
    {
        //
    }
}
