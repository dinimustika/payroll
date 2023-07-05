@section('title', 'Payroll Page')
@extends('templates.head')
@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Payroll Page</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Payroll</li>
                    </ol>
                </nav>
            </div>
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
                            <h4 class="card-title">Company Payrolls</h4>
                            <h5 class="card-subtitle">Lists of company payrolls</h5>
                        </div>
                        <div class="ms-auto">
                            <div class="dl">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPayroll">
                                    Add Payrolls
                                </button>
                                <div class="modal fade" id="addPayroll" tabindex="-1" role="dialog" aria-labelledby="addPayrollLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addPayrollLabel">Add Payroll Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ url('payrolls') }}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row col-md-12">
                                                        <label for="EmployeeID" class="col-md-4">EmployeeID</label>
                                                        <select name="EmployeeID" id="EmployeeID" class="form-control col-md-8">
                                                            <option value="">Select Payroll</option>
                                                            @foreach($employee as $employee)
                                                            <option value="{{$employee->EmployeeID}}">{{$employee->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Date" class="col-md-4">Date</label>
                                                        <input type="date" name="Date" id="Date" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="BasicSalary" class="col-md-4">Basic Salary</label>
                                                        <input type="number" name="BasicSalary" id="BasicSalary" readonly class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="OvertimePay" class="col-md-4">Overtime Pay</label>
                                                        <input type="number" step="0.01" name="OvertimePay" id="OvertimePay" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Deduction" class="col-md-4">Deduction</label>
                                                        <input type="number" step="0.01" name="Deduction" id="Deduction" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Bonus" class="col-md-4">Bonus</label>
                                                        <input type="number" step="0.01" name="Bonus" id="Bonus" class="form-control col-md-8">
                                                    </div><br>
                                                    <div class="row col-md-12">
                                                        <label for="Total" class="col-md-4">Total</label>
                                                        <input type="number" step="0.01" name="Total" id="Total" class="form-control col-md-8" readonly>
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
                                <th class="border-top-0">Payroll Name</th>
                                <th class="border-top-0">Basic Salary</th>
                                <th class="border-top-0">Overtime Pay</th>
                                <th class="border-top-0">Deduction</th>
                                <th class="border-top-0">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payroll as $payroll)
                            <tr>
                                <td>{{ $payroll->Name }}</td>
                                <td>{{ $payroll->BasicSalary }}</td>
                                <td>{{ $payroll->OvertimePay }}</td>
                                <td>{{ $payroll->Deduction }}</td>
                                <td>
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <a href="{{ route('payrolls.show', $payroll->InfoID) }}" data-toggle="modal" data-target="#payrollModal{{$payroll->InfoID}}" class="btn btn-warning"><i class="mdi mdi-pencil"></i></a>
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
                                        <form method="POST" action="payrolls/{{$payroll->InfoID}}/destroy" class="col-md-6">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#EmployeeID').change(function() {
            var selectedOption = $(this).val();
            $.ajax({
                url: '/getDynamicValue',
                method: 'GET',
                data: {
                    option: selectedOption
                },
                success: function(response) {
                    $('#BasicSalary').val(response.BasicSalary);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
        $('#OvertimePay, #Deduction, #Bonus').change(function() {
            var BasicSalary = parseFloat($('#BasicSalary').val()) || 0;
            var OvertimePay = parseFloat($('#OvertimePay').val()) || 0;
            var Deduction = parseFloat($('#Deduction').val()) || 0;
            var Bonus = parseFloat($('#Bonus').val()) || 0;

            var total = BasicSalary + OvertimePay - Deduction + Bonus;
            $('#Total').val(total.toFixed(2));
        });
    });
</script>

@stop