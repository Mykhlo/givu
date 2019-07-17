<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Favourites, OrgCategory};
use Illuminate\Support\Facades\{Auth, Validator};

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //get auth user
        $user = Auth::user();        
        //get categories
        $categories = OrgCategory::all(); //get all organizations catigories
        //get favourites if user authoricated
        if(optional($user)->customer()){
                $favourites = $user->customer()->first()->favourites()->get();
                $categories = $categories->diff($favourites);//delete favourites from categories                
                $categories = $favourites->merge($categories);//add lefted categories
                $categories = $categories->chunk(2); //split array by rows(two in row)
                return view('customer.landing', compact('categories'), compact('favourites')); 
        }else{
                $categories = $categories->chunk(2); //split array by rows(two in row)
                return view('customer.landing', compact('categories')); 
        }       
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
     * Store favourite organizations
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function store(Request $request)
    {
        //get auth user
        $user = Auth::user();         
        //check is user are customer and authoricated
        if(optional($user)->customer()){
             $validator = Validator::make($request->all(), [
                'id' => 'required|integer|min:0|max:255',            
            ]);
            //check if data is valid
            if (!$validator->fails()){
                $favourites = $user->customer()->first()->favourites();
                //remove if exist and add if not
                if($favourites->get()->contains($request->id)){
                    $favourites->detach($request->id);
                }else{
                    $favourites->attach($request->id);
                } 
            }              
        }      
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\OrgCatogory  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
        return view('customer.org_category', compact('category'));
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
