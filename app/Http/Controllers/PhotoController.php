<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Order;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('abc');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return $request->name . ' Created Successfull...';
    }
    
    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        //
        return $request->name . ' Stored Successfull...';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return $id . " is showing";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return $id . " Editing ";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return $id . $request->name . ' is updated.';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // Order::all();
        return $id . ' destroy...';
    }
}
