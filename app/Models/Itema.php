<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itema extends Model
{
    use HasFactory;
    protected $fillable=['title','price'];
}
