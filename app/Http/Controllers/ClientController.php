<?php

namespace App\Http\Controllers;

use App\Title as Title;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct( Title $titles)
    {
        $this->titles = $titles->all();
    }

    public function di()
    {
        dd($this->titles);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return __METHOD__;
        return view('client/index');
    }

    public function newClient()
    {
        // return __METHOD__;
        return view('client/newClient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return __METHOD__;
        return view('client/create');
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

    
    public function show($client_id)
    {
        // return __METHOD__ . ':' . $client_id;
        return view('client/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
