<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'resep';
<<<<<<< HEAD

    protected $primaryKey = 'id_resep';
=======
>>>>>>> 95630ebdcd8400e454fbda54ae93315ce603d1b4
    
    protected $guarded = ['id_resep'];
}
