<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'periksa';
<<<<<<< HEAD

    protected $primaryKey = 'id_periksa';
=======
>>>>>>> 95630ebdcd8400e454fbda54ae93315ce603d1b4
    
    protected $guarded = ['id_periksa'];
}
