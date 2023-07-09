<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdam extends Model
{
    protected $table = "tb_pdam";

    protected $primaryKey = 'id_pelanggan';

    protected $fillable = ['tgl_tagihan', 'no_pelanggan', 'nama_pelanggan', 'jumlah_meter', 'biaya'];
}
