<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPembayaran extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pembayaran';
<<<<<<< HEAD

    protected $primaryKey = 'id_riwayat_pembayaran';
=======
>>>>>>> 95630ebdcd8400e454fbda54ae93315ce603d1b4
    
    protected $guarded = ['id_riwayat_pembayaran'];
}
