<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassData extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'maximum_students', 'status','description'];
    protected $table="classdatas";
}
