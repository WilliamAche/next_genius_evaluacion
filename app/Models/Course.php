<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    
    protected $table = 'course';

    protected $fillable = [
        'name',
        'description',
        'price',
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
