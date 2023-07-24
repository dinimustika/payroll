@section('title', 'Attendance Page')
@extends('templates.head')
@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Attendance Page</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Attendance</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-7">
            <!-- <div class="text-end upgrade-btn">
                <a href="https://www.wrappixel.com/templates/xtremeadmin/" class="btn btn-danger text-white" target="_blank">Upgrade to Pro</a>
            </div> -->
        </div>
    </div>
</div>
@if(!empty($employee))
<div class="container-fluid">
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title">Company Attendances</h4>
                            <h5 class="card-subtitle">Lists of company attendances</h5>
                        </div>
                        <div class="ms-auto">
                            <div class="dl">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAttendance">
                                    Add Attendance
                                </button>
                                <div class="modal fade" id="addAttendance" tabindex="-1" role="dialog" aria-labelledby="addAttendanceLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addAttendanceLabel">Add Attendance Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ url('attendances') }}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row col-md-12">
                                                        <label for="EmployeeID" class="col-md-4">Employee ID</label>
                                                        <select name="EmployeeID" id="EmployeeID" class="form-control col-md-8">                                                            
                                                            <option value="{{ $employee->EmployeeID }}">{{$employee->Name}}</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Date" class="col-md-4">Date</label>
                                                        <input name="Date" type="date" id="Date" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Checkin" class="col-md-4">Checkin</label>
                                                        <input name="Checkin" type="time" id="Checkin" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Checkout" class="col-md-4">Checkout</label>
                                                        <input name="Checkout" type="time" id="Checkout" class="form-control col-md-8">
                                                    </div><br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive container">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Employee Name</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Checkin Time</th>
                                <th class="border-top-0">Checkout Time</th>
                                <th class="border-top-0">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendance as $attendance)
                            <tr>
                                <td>
                                    {{$attendance->Name}}
                                </td>
                                <td>
                                    {{$attendance->Date}}
                                </td>
                                <td>
                                    {{$attendance->CheckIn}}
                                </td>
                                <td>
                                    {{$attendance->CheckOut}}
                                </td>
                                <td>
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <a href="#" data-toggle="modal" data-target="#attendanceModal{{$attendance->AttendaceID}}" class="btn btn-warning"><i class="mdi mdi-magnify"></i></a>
                                            <div class="modal fade" id="attendanceModal{{$attendance->AttendaceID}}" tabindex="-1" role="dialog" aria-labelledby="attendanceModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="attendanceModalLabel">Employee Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @include('attendance.modal')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container-fluid">
    <h5>No Data</h5>
</div>
@endif
@stop