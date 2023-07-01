<?php

namespace App\Http\Controllers;

use App\Models\DivisionModel;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $division = DivisionModel::all();
        return view('division/index', compact('division'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DivisionModel $divisionModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DivisionModel $divisionModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DivisionModel $divisionModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DivisionModel $divisionModel)
    {
        //
    }
}
