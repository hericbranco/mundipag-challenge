<?php

namespace Tests\Models;

use App\Models\Book;
use App\Models\Collectible;
use Tests\TestCase;

class BookTest extends TestCase
{
    public function testSave()
    {
        Book::create(['name' => 'Teste']);
        Collectible::create(['type' => 'cd', 'name' => 'CD1']);
        $this->assertEquals(1, Book::get()->count());
    }    
}
