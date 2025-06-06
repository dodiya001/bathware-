<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'emp_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'emp_name',
        'desi_ids',
    ];

    public function designation()
{
    return $this->belongsTo(\App\Models\Designation::class, 'desi_id', 'desi_id');
}
}
