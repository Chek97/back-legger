<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nit', 'point_name', 'team_name', 'city', 'promotor', 'terms', 'ip'];
}
