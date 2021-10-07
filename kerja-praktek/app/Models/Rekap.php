<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    protected $fillable = [
        'wfm_id',
        // 'progres_id',
        // 'plan_aktivasi',
        // 'plan_modify',
        // 'plan_dc',
        'olo',
        'aktivasi',
        'modify',
        'disconnect',
        'resume',
        'suspend'
    ];



}
