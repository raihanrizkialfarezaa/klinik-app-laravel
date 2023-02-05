<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $primaryKey = 'id_pembayaran';

=======
>>>>>>> 95630ebdcd8400e454fbda54ae93315ce603d1b4
    protected $table = 'pembayaran';
    
    protected $guarded = ['id_pembayaran'];
}
