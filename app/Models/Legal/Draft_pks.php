<?php

namespace App\Models\Legal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft_pks extends Model
{
    use HasFactory;

    public
    $primaryKey = 'mdp_pk', // setup primaryKey
    $incrementing = false, // setup autoincrement primarykey visibility
    $timestamps = false; // setup timestamps visibility

    protected
        $connection = 'emst',
        $table = 'mst_draft_pks',
        $fillable = [
            // 'mpks_pk',
            // 'mpks_nomor',
            // 'mpks_instansi',
            // 'mpks_tentang',
            // 'mpks_tgl_mulai',
            // 'mpks_tgl_akhir',
            // 'mpks_mrkn_kode',
            // 'mpks_pic',
            // 'mpks_pic_hp',
            // 'mpks_pic_email',
            // 'mpks_atasan_hp',
            // 'mpks_atasan_email',
            // 'mpks_ket',
            // 'mpks_nomor_ori' ,
            // 'mpks_endos' ,
            // 'mpks_endos_idx',
            // 'mpks_indexfolder',
            // 'mpks_hapus',
            // 'mpks_ins_user',
            // 'mpks_ins_date',
            // 'mpks_upd_date',
            // 'mpks_upd_user',
            // 'mpks_dokumen',
        ],
        $keyType = 'string';
}
