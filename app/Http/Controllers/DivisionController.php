<?php

namespace App\Http\Controllers;

use App\Models\DivisionModel;
use App\Models\EmployeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = EmployeeModel::all();
        $employees = DB::table('Employees')->get();
        $division = DivisionModel::leftJoin('employees','employees.EmployeeID', 'divisions.DivisionLead')->select(DB::raw("divisions.*, CONCAT(LEFT(DivisionName, 1), SUBSTRING(DivisionName, INSTR(DivisionName, ' ') + 1, 1)) AS inisial, (SELECT COUNT(A.EmployeeID) FROM employees A WHERE a.DivisionID = divisions.DivisionID) as total_emp, (select B.Name FROM employees B WHERE B.DivisionID = divisions.DivisionID AND B.EmployeeLevel=3) as team_lead"))->get();
        return view('division/index', compact('division','employee','employees'));
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
    public function show($divisionModel)
    {
        $employee = EmployeeModel::all();
        $division = DivisionModel::find($divisionModel);
        return view('division.modal', compact('division','employee'));
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
    public function update(Request $request, $divisionModel)
    {
        $division = DivisionModel::find($divisionModel);
        $division->DivisionName = $request->DivisionName;
        $division->DivisionLead = $request->DivisionLead;
        if(!empty($request->Overview)){
            $division->Overview = $request->Overview;
        }
        $division->save();
        return redirect()->to('/divisions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($divisionModel)
    {
        $division = DivisionModel::find($divisionModel);
        $division->destroy();
        return redirect()->to('/divisions');
    }
}
