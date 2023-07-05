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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">
                                    Add Users
                                </button>
                                <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addUserLabel">Add User Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ url('users') }}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row col-md-12">
                                                        <label for="Username" class="col-md-4">Username</label>
                                                        <input type="text" name="Username" id="Username" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Password" class="col-md-4">Password</label>
                                                        <input type="password" name="Password" id="Password" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="UserStatus" class="col-md-4">User Status</label>
                                                        <select name="UserStatus" id="UserStatus" class="form-control col-md-8">
                                                            <option value="">Select Status</option>
                                                            <option value="Active" selected>Active</option>
                                                            <option value="Inactive">Inactive</option>
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
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addEmployee">
                                    Add Employee
                                </button>
                                <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="addEmployeeLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addEmployeeLabel">Add Employee Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ url('employees') }}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row col-md-12">
                                                        <label for="Name" class="col-md-4">Employee Name</label>
                                                        <input type="text" name="Name" id="Name" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Email" class="col-md-4">Employee Email</label>
                                                        <input type="email" name="Email" id="Email" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Address" class="col-md-4">Employee Address</label>
                                                        <input type="text" name="Address" id="Address" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="DOB" class="col-md-4">Employee DOB</label>
                                                        <input type="date" name="DOB" id="DOB" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="BasicSalary" class="col-md-4">Employee Basic Salary</label>
                                                        <input type="number" name="BasicSalary" id="BasicSalary" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="DivisionID" class="col-md-4">Employee Division</label>
                                                        <select name="DivisionID" id="DivisionID" class="form-control col-md-8">
                                                            <option value="">Select Division</option>
                                                            @foreach ($division as $division)
                                                            <option value="{{$division->DivisionID}}">{{$division->DivisionName}}</option>                                                            
                                                            @endforeach
                                                        </select>
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Gender" class="col-md-4">Employee Gender</label>
                                                        <select name="Gender" id="Gender" class="form-control col-md-8">
                                                            <option value="">Select Gender</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Male">Male</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="UserID" class="col-md-4">UserID</label>
                                                        <select name="UserID" id="UserID" class="form-control col-md-8">
                                                            <option value="">Select UserID</option>
                                                            @foreach ($user as $user)
                                                            <option value="{{$user->UserID}}">{{$user->Username}}</option>                                                            
                                                            @endforeach
                                                        </select>
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="EmployeeLevel" class="col-md-4">Employee Level</label>
                                                        <select name="EmployeeLevel" id="EmployeeLevel" class="form-control col-md-8">
                                                            <option value="">Select Level</option>
                                                            <option value="1">Staff Junior</option>
                                                            <option value="2">Staff Senior</option>
                                                            <option value="3">Division Lead</option>
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
                                <th class="border-top-0">Employee Email</th>
                                <th class="border-top-0">Employees Address</th>
                                <th class="border-top-0">Employees Gender</th>
                                <th class="border-top-0">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $employee)
                            <tr>
                                <td>{{ $employee->Name }}</td>
                                <td>{{ $employee->Email }}</td>
                                <td>{{ $employee->Address }}</td>
                                <td>{{ $employee->Gender }}</td>
                                <td>
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <a href="employees/{{$employee->EmployeeID}}/edit" class="btn btn-warning"><i class="mdi mdi-pencil"></i></a>
                                        </div>
                                        <form method="POST" action="employees/{{$employee->EmployeeID}}/destroy" class="col-md-6">
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