<?php

namespace App\Http\Controllers;

use App\Models\Database;
use App\Exports\RekapExport;
use App\Imports\RekapImport;
use App\Http\Controllers\Controller;
use App\Models\Rekap;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use function Psy\bin;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // query ambil data
        // PT TELEKOMUNIKASI SELULAR

        $telkom_aktivasi = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',2)
                    ->where('wfms.order_type','=','NEW INSTALL')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();

        $telkom_modify = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',2)
                    ->where('wfms.order_type','=','MODIFY')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $telkom_dc = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',2)
                    ->where('wfms.order_type','=','DISCONNECT')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $telkom_resume = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',2)
                    ->where('wfms.order_type','=','RESUME')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $telkom_suspend = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',2)
                    ->where('wfms.order_type','=','SUSPEND')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();



        // APLIKANUSA LINTASARTA

        $APLIKANUSA_aktivasi = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',3)
                    ->where('wfms.order_type','=','NEW INSTALL')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();

        $APLIKANUSA_modify = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',3)
                    ->where('wfms.order_type','=','MODIFY')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $APLIKANUSA_dc = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',3)
                    ->where('wfms.order_type','=','DISCONNECT')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $APLIKANUSA_resume = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',3)
                    ->where('wfms.order_type','=','RESUME')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $APLIKANUSA_suspend = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',3)
                    ->where('wfms.order_type','=','SUSPEND')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();



        // PT MORA TELEMATIKA INDONESIA


        $PT_MORA_TELEMATIKA_INDONESIA_aktivasi = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',4)
                    ->where('wfms.order_type','=','NEW INSTALL')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();

        $PT_MORA_TELEMATIKA_INDONESIA_modify = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',4)
                    ->where('wfms.order_type','=','MODIFY')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $PT_MORA_TELEMATIKA_INDONESIA_dc = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',4)
                    ->where('wfms.order_type','=','DISCONNECT')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $PT_MORA_TELEMATIKA_INDONESIA_resume = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',4)
                    ->where('wfms.order_type','=','RESUME')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $PT_MORA_TELEMATIKA_INDONESIA_suspend = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',4)
                    ->where('wfms.order_type','=','SUSPEND')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        // PT HIPERNET INDODATA

        $PT_HIPERNET_INDODATA_aktivasi = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',5)
                    ->where('wfms.order_type','=','NEW INSTALL')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();

        $PT_HIPERNET_INDODATA_modify = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',5)
                    ->where('wfms.order_type','=','MODIFY')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $PT_HIPERNET_INDODATA_dc = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',5)
                    ->where('wfms.order_type','=','DISCONNECT')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $PT_HIPERNET_INDODATA_resume = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',5)
                    ->where('wfms.order_type','=','RESUME')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        $PT_HIPERNET_INDODATA_suspend = DB::table('rekaps')
                    ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                    ->select('rekaps.*','wfms.order_type')
                    ->where('rekaps.id','=',5)
                    ->where('wfms.order_type','=','SUSPEND')
                    ->groupBy('rekaps.id','wfms.order_type')
                    ->count();


        // MEGA AKSES PERSADA (FIBERSTAR)

        $MEGA_AKSES_PERSADA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',6)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $MEGA_AKSES_PERSADA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',6)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $MEGA_AKSES_PERSADA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',6)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $MEGA_AKSES_PERSADA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',6)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $MEGA_AKSES_PERSADA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',6)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();




        // SMART TEKNOLOGI UTAMA
        $SMART_TEKNOLOGI_UTAMA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',7)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $SMART_TEKNOLOGI_UTAMA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',7)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $SMART_TEKNOLOGI_UTAMA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',7)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $SMART_TEKNOLOGI_UTAMA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',7)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $SMART_TEKNOLOGI_UTAMA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',7)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // LINTAS JARINGAN NUSANTARA

        $LINTAS_JARINGAN_NUSANTARA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',8)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $LINTAS_JARINGAN_NUSANTARA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',8)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $LINTAS_JARINGAN_NUSANTARA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',8)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $LINTAS_JARINGAN_NUSANTARA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',8)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $LINTAS_JARINGAN_NUSANTARA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',8)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // HUTCHINSON 3 INDONESIA


        $HUTCHINSON_3_INDONESIA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',9)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $HUTCHINSON_3_INDONESIA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',9)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $HUTCHINSON_3_INDONESIA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',9)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $HUTCHINSON_3_INDONESIA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',9)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $HUTCHINSON_3_INDONESIA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',9)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        // PT RADMILA

        $PT_RADMILA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',10)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $PT_RADMILA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',10)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_RADMILA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',10)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_RADMILA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',10)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_RADMILA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',10)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // TIGATRA INFOKOM

        $TIGATRA_INFOKOM_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',11)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $TIGATRA_INFOKOM_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',11)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $TIGATRA_INFOKOM_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',11)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $TIGATRA_INFOKOM_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',11)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $TIGATRA_INFOKOM_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',11)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // AMBHARA DUTA SHANTI

        $AMBHARA_DUTA_SHANTI_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',12)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $AMBHARA_DUTA_SHANTI_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',12)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $AMBHARA_DUTA_SHANTI_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',12)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $AMBHARA_DUTA_SHANTI_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',12)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $AMBHARA_DUTA_SHANTI_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',13)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // BINA INFORMATIKA SOLUSI (BITSNET)

        $BINA_INFORMATIKA_SOLUSI_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',13)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $BINA_INFORMATIKA_SOLUSI_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',13)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $BINA_INFORMATIKA_SOLUSI_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',13)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $BINA_INFORMATIKA_SOLUSI_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',13)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $BINA_INFORMATIKA_SOLUSI_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',13)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // FIQRAN SOLUSINDO MEDIATAMA (FASTAMA)

        $FIQRAN_SOLUSINDO_MEDIATAMA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',14)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $FIQRAN_SOLUSINDO_MEDIATAMA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',14)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $FIQRAN_SOLUSINDO_MEDIATAMA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',14)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $FIQRAN_SOLUSINDO_MEDIATAMA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',14)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $FIQRAN_SOLUSINDO_MEDIATAMA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',14)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // INTERNET INI SAJA

        $INTERNET_INI_SAJA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',15)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $INTERNET_INI_SAJA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',15)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $INTERNET_INI_SAJA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',15)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $INTERNET_INI_SAJA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',15)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $INTERNET_INI_SAJA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',15)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // PARSAORAN GLOBAL DATATRANS (HSPNET)

        $PARSAORAN_GLOBAL_DATATRANS_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',16)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $PARSAORAN_GLOBAL_DATATRANS_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',16)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PARSAORAN_GLOBAL_DATATRANS_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',16)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PARSAORAN_GLOBAL_DATATRANS_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',16)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PARSAORAN_GLOBAL_DATATRANS_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',16)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // QUIROS NETWORKS

        $QUIROS_NETWORKS_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',17)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $QUIROS_NETWORKS_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',17)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $QUIROS_NETWORKS_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',17)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $QUIROS_NETWORKS_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',17)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $QUIROS_NETWORKS_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',17)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // CITRA JELAJAH INFORMATIKA (CIFO)

        $CITRA_JELAJAH_INFORMATIKA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',18)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $CITRA_JELAJAH_INFORMATIKA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',18)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $CITRA_JELAJAH_INFORMATIKA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',18)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $CITRA_JELAJAH_INFORMATIKA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',18)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $CITRA_JELAJAH_INFORMATIKA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',18)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // DANKOM MITRA ABADI

        $DANKOM_MITRA_ABADI_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',19)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $DANKOM_MITRA_ABADI_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',19)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $DANKOM_MITRA_ABADI_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',19)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $DANKOM_MITRA_ABADI_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',19)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $DANKOM_MITRA_ABADI_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',19)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // HANASTA DAKARA

        $HANASTA_DAKARA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',20)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $HANASTA_DAKARA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',20)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $HANASTA_DAKARA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',20)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $HANASTA_DAKARA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',20)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $HANASTA_DAKARA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',20)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // PT DAYAMITRA TELEKOMUNIKASI

        $PT_DAYAMITRA_TELEKOMUNIKASI_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',21)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $PT_DAYAMITRA_TELEKOMUNIKASI_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',21)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_DAYAMITRA_TELEKOMUNIKASI_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',21)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_DAYAMITRA_TELEKOMUNIKASI_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',21)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_DAYAMITRA_TELEKOMUNIKASI_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',21)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        // PT JALAWAVE CAKRAWALA

        $PT_JALAWAVE_CAKRAWALA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',22)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $PT_JALAWAVE_CAKRAWALA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',22)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_JALAWAVE_CAKRAWALA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',22)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_JALAWAVE_CAKRAWALA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',22)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_JALAWAVE_CAKRAWALA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',22)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();



        // PT TELE GLOBE GLOBAL

        $PT_TELE_GLOBE_GLOBAL_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',23)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $PT_TELE_GLOBE_GLOBAL_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',23)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_TELE_GLOBE_GLOBAL_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',23)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_TELE_GLOBE_GLOBAL_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',23)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_TELE_GLOBE_GLOBAL_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',23)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();



        // PT TELKOM SATELIT INDONESIA

        $PT_TELKOM_SATELIT_INDONESIA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',24)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $PT_TELKOM_SATELIT_INDONESIA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',24)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_TELKOM_SATELIT_INDONESIA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',24)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_TELKOM_SATELIT_INDONESIA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',24)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $PT_TELKOM_SATELIT_INDONESIA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',24)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();



        // TELKOM DWS TRIAL 8IC

        $TELKOM_DWS_TRIAL_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',25)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $TELKOM_DWS_TRIAL_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',25)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $TELKOM_DWS_TRIAL_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',25)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $TELKOM_DWS_TRIAL_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',25)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $TELKOM_DWS_TRIAL_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',25)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();



        // CEMERLANG MULTIMEDIA (SRARNET)

        $CEMERLANG_MULTIMEDIA_aktivasi = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',26)
                ->where('wfms.order_type','=','NEW INSTALL')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();

        $CEMERLANG_MULTIMEDIA_modify = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',26)
                ->where('wfms.order_type','=','MODIFY')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $CEMERLANG_MULTIMEDIA_dc = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',26)
                ->where('wfms.order_type','=','DISCONNECT')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $CEMERLANG_MULTIMEDIA_resume = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',26)
                ->where('wfms.order_type','=','RESUME')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();


        $CEMERLANG_MULTIMEDIA_suspend = DB::table('rekaps')
                ->join('wfms','rekaps.id', '=','wfms.rekap_id')
                ->select('rekaps.*','wfms.order_type')
                ->where('rekaps.id','=',26)
                ->where('wfms.order_type','=','SUSPEND')
                ->groupBy('rekaps.id','wfms.order_type')
                ->count();




        $rekap = [

            // 1

            [
                'olo' => 'PT TELEKOMUNIKASI SELULAR',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $telkom_aktivasi,
                'modify' => $telkom_modify,
                'dc' => $telkom_dc,
                'resume' => $telkom_resume,
                'suspend' => $telkom_suspend
            ],

            // 2

            [
                'olo' => 'APLIKANUSA LINTASARTA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $APLIKANUSA_aktivasi,
                'modify' => $APLIKANUSA_modify,
                'dc' => $APLIKANUSA_dc,
                'resume' => $APLIKANUSA_resume,
                'suspend' => $APLIKANUSA_suspend
            ],

            // 3

            [
                'olo' => 'PT MORA TELEMATIKA INDONESIA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $PT_MORA_TELEMATIKA_INDONESIA_aktivasi,
                'modify' => $PT_MORA_TELEMATIKA_INDONESIA_modify,
                'dc' => $PT_MORA_TELEMATIKA_INDONESIA_dc,
                'resume' => $PT_MORA_TELEMATIKA_INDONESIA_resume,
                'suspend' => $PT_MORA_TELEMATIKA_INDONESIA_suspend
            ],

            // 4

            [
                'olo' => 'PT HIPERNET INDODATA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $PT_HIPERNET_INDODATA_aktivasi,
                'modify' => $PT_HIPERNET_INDODATA_modify,
                'dc' => $PT_HIPERNET_INDODATA_dc,
                'resume' => $PT_HIPERNET_INDODATA_resume,
                'suspend' => $PT_HIPERNET_INDODATA_suspend
            ],

            // 5

            [
                'olo' => 'MEGA AKSES PERSADA (FIBERSTAR)',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $MEGA_AKSES_PERSADA_aktivasi,
                'modify' => $MEGA_AKSES_PERSADA_modify,
                'dc' => $MEGA_AKSES_PERSADA_dc,
                'resume' => $MEGA_AKSES_PERSADA_resume,
                'suspend' => $MEGA_AKSES_PERSADA_suspend
            ],

            // 6

            [
                'olo' => 'SMART TEKNOLOGI UTAMA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $SMART_TEKNOLOGI_UTAMA_aktivasi,
                'modify' => $SMART_TEKNOLOGI_UTAMA_modify,
                'dc' => $SMART_TEKNOLOGI_UTAMA_dc,
                'resume' => $SMART_TEKNOLOGI_UTAMA_resume,
                'suspend' => $SMART_TEKNOLOGI_UTAMA_suspend
            ],

            // 7

            [
                'olo' => 'LINTAS JARINGAN NUSANTARA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $LINTAS_JARINGAN_NUSANTARA_aktivasi,
                'modify' => $LINTAS_JARINGAN_NUSANTARA_modify,
                'dc' => $LINTAS_JARINGAN_NUSANTARA_dc,
                'resume' => $LINTAS_JARINGAN_NUSANTARA_resume,
                'suspend' => $LINTAS_JARINGAN_NUSANTARA_suspend
            ],

            // 8

            [
                'olo' => 'HUTCHINSON 3 INDONESIA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $HUTCHINSON_3_INDONESIA_aktivasi,
                'modify' => $HUTCHINSON_3_INDONESIA_modify,
                'dc' => $HUTCHINSON_3_INDONESIA_dc,
                'resume' => $HUTCHINSON_3_INDONESIA_resume,
                'suspend' => $HUTCHINSON_3_INDONESIA_suspend
            ],

            // 9

            [
                'olo' => 'PT RADMILA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $PT_RADMILA_aktivasi,
                'modify' => $PT_RADMILA_modify,
                'dc' => $PT_RADMILA_dc,
                'resume' => $PT_RADMILA_resume,
                'suspend' => $PT_RADMILA_suspend
            ],

            // 10

            [
                'olo' => 'TIGATRA INFOKOM',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $TIGATRA_INFOKOM_aktivasi,
                'modify' => $TIGATRA_INFOKOM_modify,
                'dc' => $TIGATRA_INFOKOM_dc,
                'resume' => $TIGATRA_INFOKOM_resume,
                'suspend' => $TIGATRA_INFOKOM_suspend
            ],

            // 11

            [
                'olo' => 'AMBHARA DUTA SHANTI',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $AMBHARA_DUTA_SHANTI_aktivasi,
                'modify' => $AMBHARA_DUTA_SHANTI_modify,
                'dc' => $AMBHARA_DUTA_SHANTI_dc,
                'resume' => $AMBHARA_DUTA_SHANTI_resume,
                'suspend' => $AMBHARA_DUTA_SHANTI_suspend
            ],

            // 12

            [
                'olo' => 'BINA INFORMATIKA SOLUSI (BITSNET)',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $BINA_INFORMATIKA_SOLUSI_aktivasi,
                'modify' => $BINA_INFORMATIKA_SOLUSI_modify,
                'dc' => $BINA_INFORMATIKA_SOLUSI_dc,
                'resume' => $BINA_INFORMATIKA_SOLUSI_resume,
                'suspend' => $BINA_INFORMATIKA_SOLUSI_suspend
            ],

            // 13

            [
                'olo' => 'FIQRAN SOLUSINDO MEDIATAMA (FASTAMA)',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $FIQRAN_SOLUSINDO_MEDIATAMA_aktivasi,
                'modify' => $FIQRAN_SOLUSINDO_MEDIATAMA_modify,
                'dc' => $FIQRAN_SOLUSINDO_MEDIATAMA_dc,
                'resume' => $FIQRAN_SOLUSINDO_MEDIATAMA_resume,
                'suspend' => $FIQRAN_SOLUSINDO_MEDIATAMA_suspend
            ],

            // 14

            [
                'olo' => 'INTERNET INI SAJA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $INTERNET_INI_SAJA_aktivasi,
                'modify' => $INTERNET_INI_SAJA_modify,
                'dc' => $INTERNET_INI_SAJA_dc,
                'resume' => $INTERNET_INI_SAJA_resume,
                'suspend' => $INTERNET_INI_SAJA_suspend
            ],

            // 15

            [
                'olo' => 'PARSAORAN GLOBAL DATATRANS (HSPNET)',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $PARSAORAN_GLOBAL_DATATRANS_aktivasi,
                'modify' => $PARSAORAN_GLOBAL_DATATRANS_modify,
                'dc' => $PARSAORAN_GLOBAL_DATATRANS_dc,
                'resume' => $PARSAORAN_GLOBAL_DATATRANS_resume,
                'suspend' => $PARSAORAN_GLOBAL_DATATRANS_suspend
            ],

            // 16

            [
                'olo' => 'QUIROS NETWORKS',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $QUIROS_NETWORKS_aktivasi,
                'modify' => $QUIROS_NETWORKS_modify,
                'dc' => $QUIROS_NETWORKS_dc,
                'resume' => $QUIROS_NETWORKS_resume,
                'suspend' => $QUIROS_NETWORKS_suspend
            ],

            // 17

            [
                'olo' => 'CITRA JELAJAH INFORMATIKA (CIFO)',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $CITRA_JELAJAH_INFORMATIKA_aktivasi,
                'modify' => $CITRA_JELAJAH_INFORMATIKA_modify,
                'dc' => $CITRA_JELAJAH_INFORMATIKA_dc,
                'resume' => $CITRA_JELAJAH_INFORMATIKA_resume,
                'suspend' => $CITRA_JELAJAH_INFORMATIKA_suspend
            ],

            // 18

            [
                'olo' => 'DANKOM MITRA ABADI',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $DANKOM_MITRA_ABADI_aktivasi,
                'modify' => $DANKOM_MITRA_ABADI_modify,
                'dc' => $DANKOM_MITRA_ABADI_dc,
                'resume' => $DANKOM_MITRA_ABADI_resume,
                'suspend' => $DANKOM_MITRA_ABADI_suspend
            ],

            // 19

            [
                'olo' => 'HANASTA DAKARA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $HANASTA_DAKARA_aktivasi,
                'modify' => $HANASTA_DAKARA_modify,
                'dc' => $HANASTA_DAKARA_dc,
                'resume' => $HANASTA_DAKARA_resume,
                'suspend' => $HANASTA_DAKARA_suspend
            ],

            // 20

            [
                'olo' => 'PT DAYAMITRA TELEKOMUNIKASI',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $PT_DAYAMITRA_TELEKOMUNIKASI_aktivasi,
                'modify' => $PT_DAYAMITRA_TELEKOMUNIKASI_modify,
                'dc' => $PT_DAYAMITRA_TELEKOMUNIKASI_dc,
                'resume' => $PT_DAYAMITRA_TELEKOMUNIKASI_resume,
                'suspend' => $PT_DAYAMITRA_TELEKOMUNIKASI_suspend
            ],

            // 21

            [
                'olo' => 'PT JALAWAVE CAKRAWALA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $PT_JALAWAVE_CAKRAWALA_aktivasi,
                'modify' => $PT_JALAWAVE_CAKRAWALA_modify,
                'dc' => $PT_JALAWAVE_CAKRAWALA_dc,
                'resume' => $PT_JALAWAVE_CAKRAWALA_resume,
                'suspend' => $PT_JALAWAVE_CAKRAWALA_suspend
            ],

            // 22

            [
                'olo' => 'PT TELE GLOBE GLOBAL',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $PT_TELE_GLOBE_GLOBAL_aktivasi,
                'modify' => $PT_TELE_GLOBE_GLOBAL_modify,
                'dc' => $PT_TELE_GLOBE_GLOBAL_dc,
                'resume' => $PT_TELE_GLOBE_GLOBAL_resume,
                'suspend' => $PT_TELE_GLOBE_GLOBAL_suspend
            ],

            // 23

            [
                'olo' => 'PT TELKOM SATELIT INDONESIA',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $PT_TELKOM_SATELIT_INDONESIA_aktivasi,
                'modify' => $PT_TELKOM_SATELIT_INDONESIA_modify,
                'dc' => $PT_TELKOM_SATELIT_INDONESIA_dc,
                'resume' => $PT_TELKOM_SATELIT_INDONESIA_resume,
                'suspend' => $PT_TELKOM_SATELIT_INDONESIA_suspend
            ],

            // 24

            [
                'olo' => 'TELKOM DWS TRIAL 8IC',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $TELKOM_DWS_TRIAL_aktivasi,
                'modify' => $TELKOM_DWS_TRIAL_modify,
                'dc' => $TELKOM_DWS_TRIAL_dc,
                'resume' => $TELKOM_DWS_TRIAL_resume,
                'suspend' => $TELKOM_DWS_TRIAL_suspend
            ],

            // 25

            [
                'olo' => 'CEMERLANG MULTIMEDIA (SRARNET)',
                'plant_aktivasi' => 2,
                'plant_modify' => 1,
                'plant_dc' => 0,
                'aktivasi' => $CEMERLANG_MULTIMEDIA_aktivasi,
                'modify' => $CEMERLANG_MULTIMEDIA_modify,
                'dc' => $CEMERLANG_MULTIMEDIA_dc,
                'resume' => $CEMERLANG_MULTIMEDIA_resume,
                'suspend' => $CEMERLANG_MULTIMEDIA_suspend
            ],
        ];
        return view('rekap.index', ["title" => "Rekap", 'rekaps' => $rekap]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekap.create', ["title" => "Tambah Data - Rekap", 'database' => Database::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Rekap $rekap)
    {
        $rekap->no = $request->no;
        $rekap->olo = $request->olo;
        $rekap->plan_aktivasi = $request->plan_aktivasi;
        $rekap->plan_modify = $request->plan_modify;
        $rekap->plan_disconnect = $request->plan_disconnect;
        $rekap->aktivasi = $request->aktivasi;
        $rekap->modify = $request->modify;
        $rekap->disconnect = $request->disconnect;
        $rekap->resume = $request->resume;
        $rekap->suspend = $request->suspend;
        $rekap->save();
        sleep(1);
        return redirect()->route('rekap.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekap $rekap)
    {

        return view('rekap.edit', ["rekap" => $rekap, "title" => "Update Data - Rekap"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rekap $rekap)
    {

        $rekap->no = $request->no;
        $rekap->olo = $request->olo;
        $rekap->plan_aktivasi = $request->plan_aktivasi;
        $rekap->plan_modify = $request->plan_modify;
        $rekap->plan_disconnect = $request->plan_disconnect;
        $rekap->aktivasi = $request->aktivasi;
        $rekap->modify = $request->modify;
        $rekap->disconnect = $request->disconnect;
        $rekap->resume = $request->resume;
        $rekap->suspend = $request->suspend;
        $rekap->save();
        sleep(1);
        return redirect()->route('rekap.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekap $rekap)
    {

        $rekap->delete();
        sleep(1);
        return back();
    }

    public function exportRekap()
    {
        return Excel::download(new RekapExport, 'rekap.xlsx');
    }
    public function importRekap(Request $request, Rekap $rekap)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('database_temp', $namaFile);

        Excel::import(new RekapImport, public_path('/database_temp/' . $namaFile));

        return redirect()->route('rekap.index');
    }
}
