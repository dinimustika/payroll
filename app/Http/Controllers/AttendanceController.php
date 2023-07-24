<?php

namespace App\Http\Controllers;

use App\Models\AttendanceModel;
use App\Models\EmployeeModel;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->get('UserLevel') == "Admin") {
            $attendance = AttendanceModel::join('employees', 'employees.EmployeeID', 'attendance.EmployeeID')->get();
            $employee = EmployeeModel::all();
            $employees = EmployeeModel::all();
        } else {
            $employee = EmployeeModel::where('UserID', session()->get('id'))->first();
            $employees = EmployeeModel::all();
            $attendance = AttendanceModel::join('employees', 'employees.EmployeeID', 'attendance.EmployeeID')->where('attendance.EmployeeID', session()->get('id'))->get();
        }
        return view('attendance.index', compact('attendance', 'employee', 'employees'));
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
        $attendance = new AttendanceModel();
        $attendance->EmployeeID = $request->EmployeeID;
        $attendance->Date = $request->Date;
        $attendance->CheckIn = $request->Checkin;
        $attendance->CheckOut = $request->Checkout;
        $attendance->save();
        return redirect()->to('/attendances');
    }

    /**
     * Display the specified resource.
     */
    public function show($attendanceModel)
    {
        $employee = EmployeeModel::where('UserID', $attendanceModel)->first();
        $attendance = AttendanceModel::join('employees', 'employees.EmployeeID', 'attendance.EmployeeID')->where('attendance.EmployeeID', $attendanceModel)->get();
        $employees = EmployeeModel::all();
        return view('attendance.own', compact('attendance', 'employee', 'employees'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($attendanceModel)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $attendanceModel)
    {
        $attendance = AttendanceModel::find($attendanceModel);
        $attendance->EmployeeID = $request->EmployeeID;
        $attendance->Date = $request->Date;
        $attendance->CheckIn = $request->Checkin;
        $attendance->CheckOut = $request->Checkout;
        $attendance->save();
        return redirect()->to('/attendances');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttendanceModel $attendanceModel)
    {
        //
    }
}
