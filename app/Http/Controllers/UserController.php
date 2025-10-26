<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
        return view('abc');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return 'call perfect';
    }
    
    /**
     * Display the specified resource.
    */
    public function show(string $id)
    {
        //
        return 'call perfect';
        return 'showing';
    }
    
    /**
     * Show the form for editing the specified resource.
    */
    public function edit()
    {
        //
        return 'editing';
        return 'call perfect';
    }
    
    /**
     * Update the specified resource in storage.
    */
    public function update(Request $request)
    {
        //
        return 'updating';
        return 'call perfect';
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy()
    {
        //
        return 'call perfect';
        return 'call perfect';
    }
}
