<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    use HasFactory;
    public $table = 'time_logs';
    protected $fillable = ['description', 'entry_time'];
    protected $casts = [
        'entry_time' => 'datetime',
    ];
}