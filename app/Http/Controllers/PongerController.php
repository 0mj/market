<?php

namespace App\Http\Controllers;

use App\Ponger;
use Illuminate\Http\Request;

class PongerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pongers = Ponger::orderBy('first_name', 'asc')->paginate(9);
        return view('pongers.index', ['pongers' => $pongers ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pongers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'bail|required',
            'last_name' => 'bail|required',
            'city' => 'bail|required',
            'state' => 'bail|required',
            'age' => 'bail|required',
            'height' => 'bail|required',
            'swing_hand' => 'bail|required',
            'win' => 'bail|required',
            'loss' => 'bail|required',
            
        ]);
        Ponger::create($request->all());
        return redirect('pongers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ponger  $ponger
     * @return \Illuminate\Http\Response
     */
    public function show(Ponger $ponger)
    {
        return view('pongers.show', ['ponger' => $ponger ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ponger  $ponger
     * @return \Illuminate\Http\Response
     */
    public function edit(Ponger $ponger)
    {
        #SIMPLE EDIT..
        return view('pongers.edit', ['ponger' => $ponger]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ponger  $ponger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ponger $ponger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ponger  $ponger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ponger $ponger)
    {
        //
    }
}
