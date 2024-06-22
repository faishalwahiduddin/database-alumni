<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    // table name alumni
    protected $table = 'alumni';
    use HasFactory;
    protected $fillable = [
        'profile_picture',
        'full_name',
        'email',
        'phone',
        'npm',
        'program_study',
        'entry_year',
        'company',
        'position'
    ];
}
