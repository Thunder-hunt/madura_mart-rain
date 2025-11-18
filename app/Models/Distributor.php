<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $table = 'distributors';

    protected $fillable = [
        'nama_distributor',
        'alamat_distributor',
        'notelepon_distributor',
    ];
}
