<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'cat_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'cat_name',
    ];
}