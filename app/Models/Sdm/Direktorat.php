<?php

namespace App\Models\Sdm;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Direktorat extends Model
{
    use HasFactory;

    public
        $primaryKey = 'sdir_kode', // setup primaryKey
        // $primaryKey = 'mpol_kode',
        $incrementing = false, // setup autoincrement primarykey visibility
        $timestamps = false; // setup timestamps visibility

    protected
        $connection = 'esdm',
        $table = 'sdm_direktorat',
        $fillable = [
            'sdir_kode',
            'sdir_ket',
            'sdir_kode_surat',
            'sdir_chat_ket',
            'sdir_chat_rekan',
            'sdir_chat_cabang',
            'sdir_chat_pusat',
            'sdir_chat_type',

            // 'mpol_kode',
            // 'mpol_kode_ori',
            // 'mpol_mspaj_nomor',
            // 'mpol_nomor',
            // 'mpol_mrkn_kode',
            // 'mpol_mrkn_nama',
            // 'mpol_mjns_kode',
            // 'mpol_mslr_kode',
            // 'mpol_endos',
            // 'mpol_aktif',
            // 'mpol_mekanisme',
            // 'mpol_mekanisme2',
            // 'mpol_endos_idx',
            // 'mpol_mpras_kode',
            // 'mpol_file_polis',
            // 'mpol_file_page',
            // 'mpol_tgl_awal_polis',
            // 'mpol_tgl_ahir_polis',
            // 'mpol_max_up',
            // 'mpol_openpolis',
            // 'mpol_mssp_kode',
            // 'mpol_mssp_nama',
            // 'mpol_mlok_kode',
            // 'mpol_mkar_kode_mkr',
            // 'mpol_mpid_kode',
            // 'mpol_mpojk_kode',
            // 'mpol_mjm_kode',
            // 'mpol_mgol_kode',
            // 'mpol_mgp_kode',
            // 'mpol_mgs_kode',
            // 'mpol_mlu_kode',
            // 'mpol_jns_perusahaan',
            // 'mpol_mja_kode',
            // 'mpol_mgpp_kode',
            // 'mpol_usia_min',
            // 'mpol_usia_max',
            // 'mpol_jatuh_tempo',
            // 'mpol_lapor_data',
            // 'mpol_lapor_stnc',
            // 'mpol_byr_premi',
            // 'mpol_mft_kode',
            // 'mpol_mnfa_kode',
            // 'mpol_mujh_persen',
            // 'mpol_mmfe_persen',
            // 'mpol_mfee_persen',
            // 'mpol_mkom_persen',
            // 'mpol_mkomdisc_persen',
            // 'mpol_referal',
            // 'mpol_maintenance',
            // 'mpol_overreding',
            // 'mpol_pajakfee',
            // 'mpol_handlingfee',
            // 'mpol_pajakfee_persen',
            // 'mpol_pajakkom_persen',
            // 'mpol_endors',
            // 'mpol_mrpm_nomor',
            // 'mpol_jns_tarif',
            // 'mpol_ket_endors',
            // 'mpol_tgl_terbit',
            // 'mpol_msrf_kode',
            // 'mpol_max_pst',
            // 'mpol_mkar_kode_pim',
            // 'mpol_mpuw_nomor',
            // 'mpol_tipe_uw',
            // 'mpol_mujhrf_kode',
            // 'mpol_mdr_kode',
            // 'mpol_kadaluarsa_klaim',
            // 'mpol_max_bayar_klaim',
            // 'mpol_mmft_kode_gu',
            // 'mpol_mmft_kode_wp_swasta',
            // 'mpol_mmft_kode_wp_pns',
            // 'mpol_mmft_kode_wp_pensiun',
            // 'mpol_mmft_kode_phk_pensiun',
            // 'mpol_mmft_kode_phk_swasta',
            // 'mpol_mmft_kode_phk_pns',
            // 'mpol_mmft_kode_tlo',
            // 'mpol_mmft_kode_fire',
            // 'mpol_mmft_kode_jiwa',
            // 'mpol_no_endors',
            // 'mpol_mut_kode',
            // 'mpol_mspaj_nama',
            // 'mpol_mprov_kode',
            // 'mpol_mprov_berlaku',
            // 'mpol_mth_nomor',
            // 'mpol_tenor_max',
            // 'mpol_approve',
            // 'mpol_ins_date',
            // 'mpol_ins_user',
            // 'mpol_upd_date',
            // 'mpol_upd_user',
            // 'mpol_jl',
            // 'mpol_jl_pst',
            // 'mpol_jl_pasangan',
            // 'mpol_msoc_kode',
            // 'mpol_aprove_fc',
            // 'mpol_mjns_mpid_kode',
            // 'mpol_penerima_manfaat',
            // 'mpol_sts_akun',
            // 'mpol_jenis_cetak',
            // 'mpol_jenis_bayar',
            // 'mpol_cetak_lunas',
            // 'mpol_online',
            // 'mpol_online_individual',
            // 'mpol_online_rekan',
            // 'mpol_surat_tambah',
            // 'mpol_produkbank',
            // 'mpol_va',
            // 'mpol_ketagihan',
            // 'mpol_indexfolder',
            // 'mpol_surplus',
            // 'mpol_disc_lain',
            // 'mpol_klaim_doc',
            // 'mpol_nomor_cetak',
            // 'mpol_jenis_login',
            // 'mpol_alias',
            // 'mpol_status_polis',
            // 'mpol_note',
            // 'mpol_fee_tampil',
            // 'mpol_ujroh_treaty',
            // 'mpol_trbr_pk',
            // 'mpol_trbr_nomor',
            // 'mpol_trbr_date',
            // 'mpol_sync',
            // 'mpol_va_via',
            // 'mpol_payonline',
            // 'mpol_playonline_via',
            // 'mpol_agent',
            // 'mpol_agent_via',
            // 'mpol_pemgroupusaha',
            // 'mpol_pemgroupusaha_via',
            // 'mpol_standar_perlindungan',
            // 'mpol_standar_premi',
            // 'mpol_host2host',
            // 'mpol_convert_img',
            // 'mpol_iscopy',
            // 'mpol_mpol_copy',
            // 'mpol_pilihan_cetak',
            // 'mpol_mjasu_kode',
            // 'mpol_acc_tek'
        ],
        $keyType = 'string';

    // public function childs()
    // {
    //     if (auth()->check()) {
    //         // return $this->hasMany(Menu::class, 'wmn_key', 'wmn_kode')
    //                     // ->leftJoin('user_accounts', 'wmn_tipe', '=', 'menu_tipe')
    //                     // ->leftJoin('web_menu_jabatan', 'wmn_kode', '=', 'wmj_wmn_kode')
    //                     // ->where([
    //                     //     ['wmn_tipe', '=', Auth::user()->menu_tipe],
    //                     //     ['email', '=', Auth::user()->email],
    //                     //     ['wmj_sjab_kode', '=', Auth::user()->jabatan],
    //                     //     ['wmj_aktif', 1],
    //                     // ])
    //                     // ->orderBy('wmn_urut', 'ASC');

    //         return $this->hasMany(Menu::class, 'wmn_key', 'wmn_kode')->orderBy('wmn_urut', 'ASC');
    //     }
    // }
}
