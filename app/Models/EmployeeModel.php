<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'EmployeeID';
    protected $fillable = ['Name', 'Email', 'Address', 'Gender', 'DOB', 'HireDate', 'DivisionID', 'EmployeeLevel', 'UserID', 'BasicSalary'];
}
