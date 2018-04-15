<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\smartForm;

class SmartFormController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new smartForm;

        $form->name = request('name');
        $form->email = request('email');
        $form->message = request('message');


        $form->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\smartForm  $smartForm
     * @return \Illuminate\Http\Response
     */
    public function show(smartForm $smartForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\smartForm  $smartForm
     * @return \Illuminate\Http\Response
     */
    public function edit(smartForm $smartForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\smartForm  $smartForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, smartForm $smartForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\smartForm  $smartForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(smartForm $smartForm)
    {
        //
    }
}
