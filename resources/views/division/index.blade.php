@section('title', 'Division Page')
@extends('templates.head')
@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Division Page</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Division</li>
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
                            <h4 class="card-title">Company Divisions</h4>
                            <h5 class="card-subtitle">Lists of company divisions</h5>
                        </div>
                        <div class="ms-auto">
                            <div class="dl">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addDivision">
                                    Add Division
                                </button>
                                <div class="modal fade" id="addDivision" tabindex="-1" role="dialog" aria-labelledby="addDivisionLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addDivisionLabel">Add Division Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ url('divisions') }}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row col-md-12">
                                                        <label for="DivisionName" class="col-md-4">Division Name</label>
                                                        <input type="text" name="DivisionName" id="DivisionName" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="DivisionOverview" class="col-md-4">Division Overview</label>
                                                        <textarea name="Overview" id="Overview" class="form-control col-md-8" rows="4"></textarea>
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="DivisionLead" class="col-md-4">Division Lead</label>
                                                        <select name="DivisionLead" id="DivisionLead" class="form-control col-md-8">
                                                            <option value="">Select Employee</option>
                                                            @foreach($employee as $employee)
                                                            <option value="{{$employee->EmployeeID}}">{{$employee->Name}}</option>
                                                            @endforeach
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
                <div class="table-responsive container">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Division Name</th>
                                <th class="border-top-0">Division Lead</th>
                                <th class="border-top-0">Employees Number</th>
                                <th class="border-top-0">Overview</th>
                                <th class="border-top-0">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($division as $division)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><a class="btn btn-circle d-flex btn-info text-white">{{$division->inisial}}</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">{{$division->DivisionName}}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-success"><h6>{{$division->team_lead}}</h6></label>
                                </td>
                                <td>
                                    <h6 class="m-b-0">{{$division->total_emp}}</h6>
                                </td>
                                <td>
                                    <p class="m-b-0">{{$division->Overview}}</p>
                                </td>
                                <td>
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <a href="#" data-toggle="modal" data-target="#divisionModal{{$division->DivisionID}}" class="btn btn-warning"><i class="mdi mdi-pencil"></i></a>
                                            <div class="modal fade" id="divisionModal{{$division->DivisionID}}" tabindex="-1" role="dialog" aria-labelledby="divisionModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="divisionModalLabel">Employee Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @include('division.modal')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form method="POST" action="divisions/{{$division->DivisionID}}/destroy" class="col-md-6">
                                            @csrf
                                            @method('DELETE')
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                                            </div>
                                        </form>
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
@stop