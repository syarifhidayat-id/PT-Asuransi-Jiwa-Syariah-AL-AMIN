<?php

namespace App\Models\Tehnik;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Lini extends Model
{
    use HasFactory;

    public
        $primaryKey = 'mlu_kode', // setup primaryKey
        $incrementing = false, // setup autoincrement primarykey visibility
        $timestamps = false; // setup timestamps visibility

    protected
        $connection = 'emst',
        $table = 'mst_liniusaha',
        // $fillable = [
        //     'wmn_kode',
        //     'wmn_icon',
        //     'wmn_descp',
        //     'wmn_urut',
        //     'wmn_tipe',
        //     'wmn_key',
        //     'wmn_url',
        //     'wmn_urlkode',
        //     'wmn_slide',
        //     'wmn_timer',
        //     'wmn_info',
        //     'wmn_mrkn_kode',
        //     'wmn_mpol_kode',
        //     'wmn_open_w',
        //     'wmn_url_o',
        //     'wmn_url_o_aktif',
        //     'wmn_bot',
        //     'wmn_url_bot',
        // ],
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
