<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Attendance extends Model
{
    //Table Name
    protected $table = 'attendances';
    //Primary Key
    public $primaryKey = 'attendanceid';
    //Timestamp
    public $timestamps = true;

    protected $fillable = [
        'aFname','aLname','aEmail','lecturer', 'lecturer_img', 'status',
    ];

}
