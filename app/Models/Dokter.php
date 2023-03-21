<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class Dokter extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_dokter';
    
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table = 'dokter';
    
    protected $guarded = ['id_dokter'];

    /**
     * Get the user that owns the Dokter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poli()
    {
        // $data = Poli::where('id_poli', $poli_id)
        return $this->belongsTo(Poli::class, 'poli_id', 'id_poli');
    }
}
