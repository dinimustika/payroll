<?php

namespace App\Http\Controllers;

use App\Models\DivisionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $division = DivisionModel::leftJoin('employees','employees.EmployeeID', 'divisions.DivisionLead')->select(DB::raw("divisions.*, CONCAT(LEFT(DivisionName, 1), SUBSTRING(DivisionName, INSTR(DivisionName, ' ') + 1, 1)) AS inisial, (SELECT COUNT(A.EmployeeID) FROM employees A WHERE a.DivisionID = divisions.DivisionID) as total_emp"))->get();
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
        $division = new DivisionModel();
        $division->DivisionName = $request->DivisionName;
        $division->DivisionLead = $request->DivisionLead;
        if(!empty($request->Overview)){
            $division->Overview = $request->Overview;
        }
        $division->save();
        return redirect()->to('/divisions');
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
    public function edit($divisionModel)
    {
        $division = DivisionModel::find($divisionModel);
        return view('division/edit', compact('division'));
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
