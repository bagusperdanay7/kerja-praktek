<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            // seed data
            DB::table('databases')->insert([
                'witel' => 'BANDUNG',
                'olo_isp' => 'PT TELEKOMUNIKASI SELULAR',
                'site_kriteria' => 'SINGLE',
                'order_type' => 'NEW INSTALL',
                'produk' => 'ASTINET',
                'satuan' => 'MBps',
                'status_ncx' => 'TSQ Failed',
            ]);

            DB::table('databases')->insert([
                'witel' => 'BANDUNG BARAT',
                'olo_isp' => 'APLIKANUSA LINTASARTA',
                'site_kriteria' => 'PASANGAN',
                'order_type' => 'MODIFY',
                'produk' => 'CATU DAYA',
                'satuan' => 'U',
                'status_ncx' => 'TSQ in Progress',
            ]);

            DB::table('databases')->insert([
                'witel' => 'CIREBON',
                'olo_isp' => 'PT MORA TELEMATIKA INDONESIA',
                'site_kriteria' => '',
                'order_type' => 'DISCONNECT',
                'produk' => 'CNDC',
                'satuan' => 'Sub Rack',
                'status_ncx' => 'TSQ Passed',
            ]);

            DB::table('databases')->insert([
                'witel' => 'KARAWANG',
                'olo_isp' => 'PT HIPERNET INDODATA',
                'site_kriteria' => '',
                'order_type' => 'RESUME',
                'produk' => 'INF_CALL CENTER',
                'satuan' => 'Ampere',
                'status_ncx' => 'Provisioning Complete',
            ]);

            DB::table('databases')->insert([
                'witel' => 'SUKABUMI',
                'olo_isp' => 'MEGA AKSES PERSADA (FIBERSTAR)',
                'site_kriteria' => '',
                'order_type' => 'SUSPEND',
                'produk' => 'INF_IPPBX',
                'satuan' => 'Ampere',
                'status_ncx' => 'Provisioning Failed',
            ]);

            DB::table('databases')->insert([
                'witel' => 'TASIKMALAYA',
                'olo_isp' => 'SMART TEKNOLOGI UTAMA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'INF_ISDN',
                'satuan' => '',
                'status_ncx' => 'Provisioning Issued',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'LINTAS JARINGAN NUSANTARA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'INF_PORT_E1',
                'satuan' => '',
                'status_ncx' => 'Provisioning Started',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'HUTCHINSON 3 INDONESIA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'INF_SL',
                'satuan' => '',
                'status_ncx' => 'Provisioning Rollback Started',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT RADMILA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'IP TRANSIT',
                'satuan' => '',
                'status_ncx' => 'BASO Started',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'TIGATRA INFOKOM',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'METRO',
                'satuan' => '',
                'status_ncx' => 'Billing Approval Started',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'AMBHARA DUTA SHANTI',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'MM VPN BACKHAUL',
                'satuan' => '',
                'status_ncx' => 'Revision in Progress',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'BINA INFORMATIKA SOLUSI (BITSNET)',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'SDWAN',
                'satuan' => '',
                'status_ncx' => 'Verify for billing',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'FIQRAN SOLUSINDO MEDIATAMA (FASTAMA)',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'VPN IP',
                'satuan' => '',
                'status_ncx' => 'Fulfill Billing Completed',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'INTERNET INI SAJA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'VPN IP DOMESTIK',
                'satuan' => '',
                'status_ncx' => 'Cancelled',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'QUIROS NETWORKS',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'WIFI',
                'satuan' => '',
                'status_ncx' => 'Cannot Display',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'CITRA JELAJAH INFORMATIKA (CIFO)',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => 'WIFI MANAGED SERVICE',
                'satuan' => '',
                'status_ncx' => 'Drop in Progress',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'HANASTA DAKARA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => 'Open',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PARSAORAN GLOBAL DATATRANS (HSPNET)',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => 'AO Not Yet',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT DAYAMITRA TELEKOMUNIKASI',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => 'Abandoned',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT TELE GLOBE GLOBAL',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT TELKOM SATELIT INDONESIA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'TELKOM DWS-TRIAL 8IC',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'HAWK TEKNOLOGI SOLUSI',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT SOLUSINDO BINTANG PRATAMA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'TRANS INDONESIA SUPERKORIDOR (TIS)',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'CEMERLANG MULTIMEDIA (SRARNET)',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'GAHARU SEJAHTERA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'INDO INTERNET',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'INFOTAMA LINTAS GLOBAL',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'JALA LINTAS MEDIA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'JEMBATAN DATA PANGRANGO',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT EKA MAS REPUBLIK (MYREPUBLIC)',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT INFOMEDIA NUSANTARA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT JALAWAVE CAKRAWALA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT TELE GLOBE GLOBAL (TGG)',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT TELENET',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT TRANS HYBRID COMMUNICATION',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT WIJAYA LINTAS KOMINDO',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT LAYANAN PRIMA DIGITAL',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'SELARAS CITRA TERABIT',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'VELTRATEL',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'ABHINAWA SUMBERDAYA ASIA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'ANDALAS MEDIA INFORMATIKA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'GRATIKA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'JABAR TELEMATIKA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'MITRA TELECOM GLOBALMANDIRI (MGM )',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PC24 CYBER TELIN',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT JASA JEJARING WASANTARA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT PATRA TELEKOMUNIKASI INDONESIA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT SMARTFREN TELECOM TBK',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT TRI ERSA GEMILANG (ERSA GEMILANG)',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'QUANTA TUNAS ABADI',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'SKYLINE SEMESTA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'TELKOM DWS',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'TELKOM DWS TRIAL 8IC',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'VARNION TECHNOLOGY SEMESTA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'CENTRIN ONLINE',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'DANKOM MITRA ABADI',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'PT INDOSAT MEGA MEDIA',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

            DB::table('databases')->insert([
                'witel' => '',
                'olo_isp' => 'FORIT ASTA SOLUSINDO (FOR IT)',
                'site_kriteria' => '',
                'order_type' => '',
                'produk' => '',
                'satuan' => '',
                'status_ncx' => '',
            ]);

                $this->call(UserSeeder::class);
        }
}
