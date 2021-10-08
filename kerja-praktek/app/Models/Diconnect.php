<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diconnect extends Model
{
    use HasFactory;
    protected $fillable = [
        'wfm_id',
        'no_ao',
        'witel',
        'olo',
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

    // filter
    public function scopeFilter($query, array $filters)
    {

        // filter no ao
        $query->when(
            $filters['no_ao'] ?? false,
            fn ($query, $no_ao) => $query->where('no_ao', 'like', '%' . $no_ao . '%')
        );

        // filter tanggal
        $query->when(
            $filters['plan_cabut'] ?? false,
            fn ($query, $plan_cabut) => $query->where('plan_cabut', 'like', '%' . $plan_cabut . '%')
        );

        // filter olo
        $query->when(
            $filters['olo'] ?? false,
            fn ($query, $olo) => $query->where('olo', 'like', '%' . $olo . '%')
        );

        // filter witel
        $query->when(
            $filters['witel'] ?? false,
            fn ($query, $witel) => $query->where('witel', 'like', '%' . $witel . '%')
        );

        // filter jenis ont
        $query->when(
            $filters['jenis_ont'] ?? false,
            fn ($query, $jenis_ont) => $query->where('jenis_ont', 'like', '%' . $jenis_ont . '%')
        );

        // filter status
        $query->when(
            $filters['status'] ?? false,
            fn ($query, $status) => $query->where('status', 'like', '%' . $status . '%')
        );
    }
}
