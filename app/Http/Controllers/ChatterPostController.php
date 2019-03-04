<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Chatter_postResource;
use App\Chatter_post;

class ChatterPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

    public function apistore(Request $request)
    {
          $Chatter_post = $request->isMethod('put') ? Chatter_post::findOrFail($request->id) : new Chatter_post;
  if ($request->isMethod('put')) {
        if($Chatter_post->update($request)) {
            return new Chatter_postResource($Chatter_post);
        }
     }if ($request->isMethod('post') ) {
        if($Chatter_post = Chatter_post::create($request) ) {
            return new Chatter_postResource($Chatter_post);
        }
     }
             
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

    public function apidestroy($id)
    { 
      
        $Chatter_post = Chatter_post::findOrFail($id);

        if($Chatter_post->delete()) {
            return new Chatter_postResource($Chatter_post);
        }    
    }
}
