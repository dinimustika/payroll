<div class="modal-body">
    <form action="divisions/{{$division->DivisionID}}" method="post">
        @csrf
        @method('PUT')
        <div class="modal-body">
            <div class="row col-md-12">
                <label for="DivisionName" class="col-md-4">Division Name</label>
                <input type="text" value="{{ $division->DivisionName }}" name="DivisionName" id="DivisionName" class="form-control col-md-8">
            </div><br>
            <div class="row col-md-12">
                <label for="DivisionOverview" class="col-md-4">Division Overview</label>
                <textarea name="Overview" id="Overview" class="form-control col-md-8" rows="4">{{ $division->Overview }}</textarea>
            </div><br>
            <div class="row col-md-12">
                <label for="DivisionLead" class="col-md-4">Division Lead</label>
                <select name="DivisionLead" id="DivisionLead" class="form-control col-md-8">
                    <option value="">Select Employee</option>
                    @foreach ($employee as $employee)
                    <option value="{{$division->team_lead}}" {{ $employee->Name == $division->team_lead ? 'selected' : '' }}>{{$division->team_lead}}</option>
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