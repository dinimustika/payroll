<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DivisionModel extends Model
{
    protected $table = 'divisions';
    protected $primaryKey = 'DivisionID';
    protected $fillable = ['DivisionName','Overview'];
}
