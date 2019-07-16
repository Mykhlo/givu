<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{TargetCategory, Gender, ParentalStatus, Income, Languages, Education};
use App\Http\Requests\CustomerRegistration;

class CustomerRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = TargetCategory::all();
        $parental_status = ParentalStatus::all();
        $gender = Gender::all();
        $income = Income::all(); 
        $languages = Languages::all(); 
        $education = Education::all();              
        return view('customer.registration', compact('categories', 'parental_status', 'gender', 'income', 'languages', 'education'));
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
     * @param  App\Http\Requests\CustomerRegistration  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRegistration $request)
    {
        dd($request->all());
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
}
