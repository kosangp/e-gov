<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'gender',
        'age',
        'contact_number',
        'email',
        'complaint_detail',
        'name_of_criminal',
    ];
}
