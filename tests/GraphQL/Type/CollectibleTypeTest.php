<?php

namespace Tests\GraphQL\Type;

use Tests\TestCase;
use App\GraphQL\Type\CollectibleType;
use GraphQL\Type\Definition\IntType;

class CollectibleTypeTest extends TestCase
{
    public function testReturnType() 
    {
        $collectibleType = new CollectibleType();        
        $this->assertArrayHasKey('id', $collectibleType->fields());
        $this->assertArrayHasKey('name', $collectibleType->fields());
        $this->assertArrayHasKey('type', $collectibleType->fields());
        $this->assertEquals('Int', $collectibleType->fields()['id']['type']->name);
        $this->assertEquals('String', $collectibleType->fields()['name']['type']->name);
        $this->assertEquals('String', $collectibleType->fields()['type']['type']->name);        
    }
}
