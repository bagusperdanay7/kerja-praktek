<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    use HasFactory;

    protected $fillable = ['witel', 'olo_isp', 'site_kriteria', 'order_type', 'produk', 'satuan', 'status_ncx'];

    public function wfm()
    {
        return $this->hasMany(Wfm::class);
    }
}
