<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $table = 'Students';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','address','mobile'];
    use HasFactory;
}
