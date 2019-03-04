<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ServiceResource;
use App\Service;

class ServiceController extends Controller
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
          $Service = $request->isMethod('put') ? Service::findOrFail($request->id) : new Service;
  if ($request->isMethod('put')) {
        if($Service->update($request)) {
            return new ServiceResource($Service);
        }
     }if ($request->isMethod('post') ) {
        if($Service = Service::create($request) ) {
            return new ServiceResource($Service);
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
      
        $Service = Service::findOrFail($id);

        if($Service->delete()) {
            return new ServiceResource($Service);
        }    
    }
}
