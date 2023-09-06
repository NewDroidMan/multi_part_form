<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primary_key = "id";
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'age',
        'address',
        "degree",
        "college",
        "passout_year",
        "score",
        "current_employer",
        "job_profile",
        "notice_peroid",
        "salary"
    ];
}
