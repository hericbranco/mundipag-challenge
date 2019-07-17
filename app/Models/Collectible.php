<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collectible extends Model
{
    protected $fillable = [
        'name',
        'type'
    ];

    protected $table = 'collectibles';

    /**
     * @return array[] Validation rules
     */
    public $rules =  [
            'name' => 'required|string',
            'type' => 'required|string'
        ];
}
