<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetalsModel extends Model
{
    use HasFactory;
    protected $table ='new_user';
    protected $fillable = ['name','address','age'];
}
