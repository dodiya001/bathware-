<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fault extends Model
{
    use HasFactory;

    protected $primaryKey = 'fault_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'fault_name',
        'desi_ids',
    ];

    public function designation()
    {
        return $this->belongsTo(\App\Models\Designation::class, 'desi_ids', 'desi_id');
    }
}