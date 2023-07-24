@section('title', 'Payroll Page')
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
                    </div>
                </div>
                <div class="table-responsive container">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Payroll Name</th>
                                <th class="border-top-0">Basic Salary</th>
                                <th class="border-top-0">Total Salary</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payroll as $payroll)
                            <tr>
                                <td>{{ $payroll->Name }}</td>
                                <td>{{ $payroll->BasicSalary }}</td>
                                <td>{{ $payroll->OvertimePay + $payroll->BasicSalary + $payroll->Bonus - $payroll->Deduction }}</td>
                                <td>{{ $payroll->Date }}</td>
                                <td>
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <a href="{{ route('payrolls.show', $payroll->InfoID) }}" data-toggle="modal" data-target="#payrollModal{{$payroll->InfoID}}" class="btn btn-warning"><i class="mdi mdi-magnify"></i></a>
                                            <div class="modal fade" id="payrollModal{{$payroll->InfoID}}" tabindex="-1" role="dialog" aria-labelledby="payrollModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="payrollModalLabel">Payroll Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @include('payroll.modal')
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