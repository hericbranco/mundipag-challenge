<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email'
    ];

    protected $table = 'contacts';

    /**
     * @return array[] Validation rules
     */
    public $rules =  [
        'name' => 'required|string',
        'email' => 'required|email|unique:contacts,email'
    ];
}
