<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use App\Models\PayrollModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = EmployeeModel::all();
        $employees = DB::table('Employees')->get();
        $payroll = PayrollModel::join('employees', 'employees.EmployeeID', 'salary_history.EmployeeID')->select(DB::raw('salary_history.*, employees.Name'))->get();
        return view('payroll.index', compact('payroll', 'employee','employees'));
    }

    public function getDynamicValue(Request $request)
    {
        $selectedOption = $request->input('option');
        $dynamicValue = DB::table('employees')->select('BasicSalary')->where('EmployeeID', $selectedOption)->first();        
        return response()->json($dynamicValue);
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
        $payroll = new PayrollModel();
        $payroll->EmployeeID = $request->EmployeeID;
        $payroll->BasicSalary = $request->BasicSalary;
        $payroll->Date = $request->Date;
        $payroll->OvertimePay = $request->OvertimePay;
        $payroll->Deduction = $request->Deduction;
        $payroll->Bonus = $request->Bonus;
        $payroll->save();
        return redirect()->to('/payrolls');
    }

    /**
     * Display the specified resource.
     */
    public function show($payrollModel)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PayrollModel $payrollModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $payrollModel)
    {
        $payroll = PayrollModel::find($payrollModel);
        $payroll->Date = $request->Date;
        $payroll->OvertimePay = $request->OvertimePay;
        $payroll->Deduction = $request->Deduction;
        $payroll->Bonus = $request->Bonus;
        $payroll->save();
        return redirect()->to('/payrolls');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PayrollModel $payrollModel)
    {
        //
    }
}
