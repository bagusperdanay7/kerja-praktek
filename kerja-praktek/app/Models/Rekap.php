<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    protected $fillable = [
        'no',
        'olo',
        // 'plan_aktivasi',
        // 'plan_modify',
        // 'plan_disconnect',
        // 'aktivasi',
        // 'modify',
        // 'disconnect',
        // 'resume',
        // 'suspend',
    ];



}
