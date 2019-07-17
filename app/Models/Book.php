<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Collectible implements CollectibleType
{
    protected $attributes = [
        'type' => 'book',
    ];

    public static function get() {
        return Collectible::whereType('book')->get();
    }
}
