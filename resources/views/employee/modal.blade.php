<div class="modal-body">
    <form action="" method="post">
        <div class="row">
            <label for="Name" class="col-md-3">Name</label>
            <input type="text" name="Name" id="Name" class="form-control col-md-9" value="{{ $employee->Name }}">
        </div><br>
        <div class="row">
            <label for="Email" class="col-md-3">Email</label>
            <input type="text" name="Email" id="Email" class="form-control col-md-9" value="{{ $employee->Email }}">
        </div><br>
        <div class="row">
            <label for="Address" class="col-md-3">Address</label>
            <input type="text" name="Address" id="Address" class="form-control col-md-9" value="{{ $employee->Address }}">
        </div><br>
        <div class="row">
            <label for="DOB" class="col-md-3">DOB</label>
            <input type="date" name="DOB" id="DOB" class="form-control col-md-9" value="{{ $employee->DOB }}">
        </div><br>
        <div class="row">
            <label for="BasicSalary" class="col-md-3">Basic Salary</label>
            <input type="number" name="BasicSalary" id="BasicSalary" class="form-control col-md-9" value="{{ $employee->BasicSalary }}">
        </div><br>
        <div class="row">
            <label for="Gender" class="col-md-3">Employee Gender</label>
            <select name="Gender" id="Gender" class="form-control col-md-9">
                <option value="">Select Gender</option>
                <option value="Female" {{ $employee->Gender == "Female" ? 'selected' : '' }}>Female</option>
                <option value="Male" {{ $employee->Gender == "Male" ? 'selected' : '' }}>Male</option>
            </select>
        </div><br>
        <div class="row">
            <label for="EmployeeLevel" class="col-md-3">Employee Level</label>
            <select name="EmployeeLevel" id="EmployeeLevel" class="form-control col-md-9">
                <option value="">Select Level</option>
                <option value="1" {{ $employee->EmployeeLevel == "1" ? 'selected' : '' }}>Staff Junior</option>
                <option value="2" {{ $employee->EmployeeLevel == "2" ? 'selected' : '' }}>Staff Senior</option>
                <option value="3" {{ $employee->EmployeeLevel == "3" ? 'selected' : '' }}>Division Lead</option>
            </select>
        </div><br>
        <div class="row">
            <label for="DivisionID" class="col-md-3">Employee Division</label>
            <select name="DivisionID" id="DivisionID" class="form-control col-md-9">
                <option value="">Select Division</option>
                @foreach ($divisions as $division)
                <option value="{{$division->DivisionID}}" {{ $employee->DivisionID == $division->DivisionID ? 'selected' : '' }}>{{$division->DivisionName}}</option>
                @endforeach
            </select>
        </div><br>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>