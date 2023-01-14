<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artificial extends Model
{
    protected $fillable = [
        "name",
        "specs",
        "machine_type",
        "company",
        "developer",
        "origin",
    ];
    use HasFactory;
}
