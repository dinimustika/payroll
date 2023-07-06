<div class="modal-body">
    <form action="attendances/{{$attendance->AttendaceID}}" method="post">
        @csrf
        @method('PUT')
        <div class="row col-md-12">
            <label for="EmployeeID" class="col-md-4">Employee ID</label>
            <select name="EmployeeID" id="EmployeeID" class="form-control col-md-8">
                <option value="">Select Employee</option>
                @foreach($employees as $employee)
                <option value="{{ $employee->EmployeeID }}" {{ $employee->EmployeeID == $attendance->EmployeeID ? 'selected' : '' }}>{{$employee->Name}}</option>
                @endforeach
            </select>
        </div><br>
        <div class="row col-md-12">
            <label for="Date" class="col-md-4">Date</label>
            <input name="Date" type="date" id="Date" class="form-control col-md-8" value="{{ $attendance->Date }}">
        </div><br>
        <div class="row col-md-12">
            <label for="Checkin" class="col-md-4">Checkin</label>
            <input name="Checkin" type="time" id="Checkin" class="form-control col-md-8" value="{{ $attendance->CheckIn }}">
        </div><br>
        <div class="row col-md-12">
            <label for="Checkout" class="col-md-4">Checkout</label>
            <input name="Checkout" type="time" id="Checkout" class="form-control col-md-8" value="{{ $attendance->CheckOut }}">
        </div><br>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>