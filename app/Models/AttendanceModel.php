<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceModel extends Model
{
    protected $table = 'attendance';
    protected $primaryKey = 'AttendaceID';
    protected $fillable = ['EmployeeID', 'Date', 'CheckIn', 'CheckOut'];
}
