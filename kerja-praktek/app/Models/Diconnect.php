<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diconnect extends Model
{
    use HasFactory;
    protected $fillable = [
        'wfm_id',
        'order',
        'customer',
        'lokasi',
        'kota',
        'jenis_ont',
        'status',
        'plan_cabut',
        'pic'
    ];

    public function wfm()
    {
        return $this->belongsTo(Wfm::class);
    }
}
