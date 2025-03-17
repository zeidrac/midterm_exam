<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'tbl_features'; // Ensure correct table name

    protected $fillable = ['name', 'description']; // Define mass-assignable fields

    public $incrementing = true; // Ensure ID auto-increments

    protected $keyType = 'int'; // Define ID as an integer
}
