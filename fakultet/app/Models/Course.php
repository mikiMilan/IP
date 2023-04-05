<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // protected $fillable = ['naziv', 'ects', 'status', 'opis'];
    // protected $fillable = ['*'];
    protected $guarded = [];

    use HasFactory;
}
