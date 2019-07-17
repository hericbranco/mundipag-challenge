<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectibleHandling extends Model
{
    protected $fillable = [
        'contact_id',
        'collectible_id',
        'status'
    ];

    protected $table = 'contacts';

    /**
     * @return array[] Validation rules
     */
    public $rules =  [
        'contact_id' => 'required|integer',
        'collectible_id' => 'required|integer',
        'status' => 'requided|string'
    ];
}
