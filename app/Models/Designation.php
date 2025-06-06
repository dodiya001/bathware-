<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Designation extends Model
{
    use HasFactory;

    protected $primaryKey = 'desi_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'desi_name',
    ];

    
}