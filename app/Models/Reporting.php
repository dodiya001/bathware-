<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporting extends Model
{
    protected $table = 'reporting';
    protected $primaryKey = 'report_id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'prod_id',
        'qty',
        'grade_id',
        'fault_id',
        'desi_id',
        'emp_id',
        'notes',
    ];

    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'prod_id', 'prod_id');
    }

    public function grade()
    {
        return $this->belongsTo(\App\Models\Grade::class, 'grade_id', 'grade_id');
    }

    public function fault()
    {
        return $this->belongsTo(\App\Models\Fault::class, 'fault_id', 'fault_id');
    }

    public function designation()
    {
        return $this->belongsTo(\App\Models\Designation::class, 'desi_id', 'desi_id');
    }

    public function employee()
    {
        return $this->belongsTo(\App\Models\Employee::class, 'emp_id', 'emp_id');
    }
}