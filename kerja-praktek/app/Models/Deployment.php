<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deployment extends Model
{
    use HasFactory;
    protected $fillable = [
            'rekap_id',
            'ao',
            'tanggal',
            'olo',
            'witel',
            'produk',
            'status_ncx',
            'status_wfm',
    ];
}
