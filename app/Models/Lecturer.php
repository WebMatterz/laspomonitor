<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $table = 'lecturers';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;

    protected $fillable = [
        'lecturerFname','lecturerLname','designationID','lecturerTel',
    ];
}
