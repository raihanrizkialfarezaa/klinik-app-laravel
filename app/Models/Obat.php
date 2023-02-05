<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $primaryKey = 'id_obat';

=======
>>>>>>> 95630ebdcd8400e454fbda54ae93315ce603d1b4
    protected $table = 'obat';
    
    protected $guarded = ['id_obat'];
}
