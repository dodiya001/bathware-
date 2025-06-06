<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    protected $primaryKey = 'file_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'file_type',
        'file_name',
        'file_size',
    ];
}