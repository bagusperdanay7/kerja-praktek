<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExeSumm extends Model
{
    use HasFactory;

    protected $fillable = ['olo', 'plan_aktivasi', 'plan_modify', 'plan_disconnect', 'aktivasi', 'modify', 'disconnect', 'resume', 'suspend'];
}
