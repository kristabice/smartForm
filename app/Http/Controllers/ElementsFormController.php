<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\elementsForm;

class ElementsFormController extends Controller
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

        if(isset($_POST['democopy'])){
            $answer ='yes';
        }
        else{
            $answer = 'no';
        }

        if(isset($_POST['demohuman'])){
            $answerhuman ='yes';
        }
        else{
            $answerhuman = 'no';
        }
        
        $form = new elementsForm;

        $form->name = request('demoname');
        $form->email = request('demoemail');
        $form->category = request('democategory');
        $form->level = request('demopriority');
        $form->email_copy = $answer;
        $form->verification = $answerhuman;
        $form->message = request('demomessage');

        $form->save();

        return redirect('/elements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\elementsForm  $elementsForm
     * @return \Illuminate\Http\Response
     */
    public function show(elementsForm $elementsForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\elementsForm  $elementsForm
     * @return \Illuminate\Http\Response
     */
    public function edit(elementsForm $elementsForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\elementsForm  $elementsForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, elementsForm $elementsForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\elementsForm  $elementsForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(elementsForm $elementsForm)
    {
        //
    }
}
