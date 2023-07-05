<?php

namespace App\Http\Controllers;

use App\Models\DivisionModel;
use App\Models\EmployeeModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = EmployeeModel::all(); 
        $division = DivisionModel::all();
        $user = UserModel::leftJoin('employees','employees.UserID','users.UserID')->select('users.*')->whereNull('employees.UserID')->get();
        return view('employee/index', compact('employee', 'division','user'));       
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
        $employee = new EmployeeModel();
        $employee->Name = $request->Name;
        $employee->Email = $request->Email;
        $employee->Address = $request->Address;
        $employee->Gender = $request->Gender;
        $employee->DOB = $request->DOB;
        $employee->DivisionID = $request->DivisionID;
        $employee->EmployeeLevel = $request->EmployeeLevel;
        $employee->UserID = $request->UserID;
        $employee->BasicSalary = $request->BasicSalary;
        $employee->save();
        return redirect()->to('/employees');
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeModel $employeeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeModel $employeeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeModel $employeeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeModel $employeeModel)
    {
        //
    }
}
