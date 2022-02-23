<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    //Primary Key
    public $primaryKey = 'taskID';
    //Timestamp
    public $timestamps = true;

    protected $fillable = [
        'lecturerName','supervisorName','assignedDate',
    ];

}

    
