<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollModel extends Model
{
    protected $table ='salary_history';
    protected $primaryKey = 'InfoID';
    protected $fillable = ['EmployeeID', 'Date', 'BasicSalary', 'OvertimePay', 'Deduction', 'Bonus'];
}
