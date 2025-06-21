<?php

namespace App\Http\Controllers;

use App\Models\dataService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'money'=> 'required',
            'bankname'=> 'required',
            'number'=>'required',
            'month'=>'required',
        ]);

        $service=Dataservice::create([
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'phone'=> $request->input('phone'),
            'money'=> $request->input('money'),
            'bankname'=> $request->input('bankname'),
            'number'=> $request->input('number'),
            'month'=> $request->input('month'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(dataService $dataService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dataService $dataService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dataService $dataService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataService $dataService)
    {
        //
    }
}
