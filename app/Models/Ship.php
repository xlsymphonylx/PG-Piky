<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;
    public $table = 'ships';
    protected $fillable = [
        'vessel', 'loaded', 'file', 'vessel_previous_name', 'call_letters', 'built_year',
        'built_by', 'hydrostatic_by', 'shipyard_no', 'hull_no', 'dated_hull',
        'registry_port', 'flag','work_order_id'
    ];
}
