<?php

namespace App\Models;

// Illuminate
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    
    protected $table = 'orders';

    protected $fillable = [
        'user',
        'course',
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

    /**
     * Relacion con el usuario
     *
     * @return void 
     */
    public function getCourse()
    {
        return $this->belongsTo('App\Models\Course', 'course', 'id');
    }

}
