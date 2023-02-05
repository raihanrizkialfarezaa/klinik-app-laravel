<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $primaryKey = 'id_pendaftaran';

=======
>>>>>>> 95630ebdcd8400e454fbda54ae93315ce603d1b4
    protected $table = 'pendaftaran';
    
    protected $guarded = ['id_pendaftaran'];
}
