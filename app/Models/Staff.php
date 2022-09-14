<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{ 
    use HasFactory;
    protected $table='staffs';
    protected $primarykey ='id';
    protected $fillable=['name','mobile','email','dob','role','address','state','country','photo'];
}
