<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $table = 'poli';
<<<<<<< HEAD

    protected $primaryKey = 'id_poli';
=======
>>>>>>> 95630ebdcd8400e454fbda54ae93315ce603d1b4
    
    protected $guarded = ['id_poli'];
}
