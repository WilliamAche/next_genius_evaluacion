<?php

namespace App\Models;

// Illuminate
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    
    protected $table = 'wallets';

    protected $fillable = [
        'user',
        'address',
        'balance',
        'status',
    ];

    /**
     * Relacion con el usuario
     *
     * @return void 
     */
    public function getUser()
    {
        return $this->belongsTo('App\Models\User', 'user', 'id');
    }

}
