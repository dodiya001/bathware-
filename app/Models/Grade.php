<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory;

    protected $primaryKey = 'grade_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'grade_name',
    ];
}