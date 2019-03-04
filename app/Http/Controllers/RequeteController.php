<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requete;
use App\Http\Resources\RequeteResource;

class RequeteController extends Controller
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
          $Requete = $request->isMethod('put') ? Requete::findOrFail($request->id) : new Requete;
  if ($request->isMethod('put')) {
        if($Requete->update($request)) {
            return new RequeteResource($Requete);
        }
     }if ($request->isMethod('post') ) {
        if($Requete = Requete::create($request) ) {
            return new RequeteResource($Requete);
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
      
        $Requete = Requete::findOrFail($id);

        if($Requete->delete()) {
            return new RequeteResource($Requete);
        }    
    }
}
