<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Chatter_user_discussionResource;
use App\Chatter_user_discussion;

class ChatterUserDiscussionController extends Controller
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
          $Chatter_user_discussion = $request->isMethod('put') ? Chatter_user_discussion::findOrFail($request->id) : new Chatter_user_discussion;
  if ($request->isMethod('put')) {
        if($Chatter_user_discussion->update($request)) {
            return new Chatter_user_discussionResource($Chatter_user_discussion);
        }
     }if ($request->isMethod('post') ) {
        if($Chatter_user_discussion = Chatter_user_discussion::create($request) ) {
            return new Chatter_user_discussionResource($Chatter_user_discussion);
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
      
        $Chatter_user_discussion = Chatter_user_discussion::findOrFail($id);

        if($Chatter_user_discussion->delete()) {
            return new Chatter_user_discussionResource($Chatter_user_discussion);
        }    
    }
}
