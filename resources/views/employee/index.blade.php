@section('title', 'Employee Page')
@extends('templates.head')
@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Employee Page</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Employee</li>
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
<div class="container-fluid">
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title">Company Employees</h4>
                            <h5 class="card-subtitle">Lists of company employees</h5>
                        </div>
                        <div class="ms-auto">
                            <div class="dl">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addDivision">
                                    Add Employee
                                </button>
                                <div class="modal fade" id="addDivision" tabindex="-1" role="dialog" aria-labelledby="addDivisionLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addDivisionLabel">Add Employee Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ url('employees') }}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row col-md-12">
                                                        <label for="DivisionName" class="col-md-4">Employee Name</label>
                                                        <input type="text" name="DivisionName" id="DivisionName" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="DivisionOverview" class="col-md-4">Employee Overview</label>
                                                        <textarea name="Overview" id="Overview" class="form-control col-md-8" rows="4"></textarea>
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="DivisionLead" class="col-md-4">Employee Lead</label>
                                                        <select name="DivisionLead" id="DivisionLead" class="form-control col-md-8">
                                                            <option value="">Select Employee</option>
                                                        </select>
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
                    <!-- title -->
                </div>
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Employee Name</th>
                                <th class="border-top-0">Employee Lead</th>
                                <th class="border-top-0">Employees Number</th>
                                <th class="border-top-0">Overview</th>
                                <th class="border-top-0">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $employee)
                            <tr>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop