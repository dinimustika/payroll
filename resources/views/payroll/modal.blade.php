<div class="modal-body">
    <form action="payrolls/{{$payroll->InfoID}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <label for="Name" class="col-md-3">Name</label>
            <select name="EmployeeID" id="EmployeeID" class="form-control col-md-9">
                <option value="">Select Employee</option>
                @foreach($employees as $employee)
                <option value="{{$employee->EmployeeID}}" {{ $employee->EmployeeID == $payroll->EmployeeID ? 'selected' : '' }}>{{$employee->Name}}</option>
                @endforeach
            </select>
        </div><br>
        <div class="row">
            <label for="Date" class="col-md-3">Date</label>
            <input type="date" name="Date" id="Date" value="{{ $payroll->Date }}" class="form-control col-md-9">
        </div><br>
        <div class="row">
            <label for="BasicSalary" class="col-md-3">Basic Salary</label>
            <input type="number" name="BasicSalary" id="BasicSalary" readonly value="{{ $payroll->BasicSalary }}" class="form-control col-md-9">
        </div><br>
        <div class="row">
            <label for="OvertimePay" class="col-md-3">Overtime Pay</label>
            <input type="number" step="0.01" name="OvertimePay" id="OvertimePay" value="{{ $payroll->OvertimePay }}" class="form-control col-md-9">
        </div><br>
        <div class="row">
            <label for="Deduction" class="col-md-3">Deduction</label>
            <input type="number" step="0.01" name="Deduction" id="Deduction" value="{{ $payroll->Deduction }}" class="form-control col-md-9">
        </div><br>
        <div class="row">
            <label for="Bonus" class="col-md-3">Bonus</label>
            <input type="number" step="0.01" name="Bonus" id="Bonus" value="{{ $payroll->Bonus }}" class="form-control col-md-9">
        </div><br>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>