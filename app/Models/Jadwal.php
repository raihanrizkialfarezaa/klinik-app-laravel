<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $primaryKey = 'id_jadwal';

=======
>>>>>>> 95630ebdcd8400e454fbda54ae93315ce603d1b4
    protected $table = 'jadwal';
    
    protected $guarded = ['id_jadwal'];
}
