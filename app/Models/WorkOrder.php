<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    use HasFactory;
    public $table = 'work_orders';
    protected $fillable = [
        'branch',
        'terminal',
        'file_number',
        'product',
        'vessel',
        'file_status',
        'eta',
    ];
}