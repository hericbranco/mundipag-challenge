<?php

namespace Tests\GraphQL\Input;

use Tests\TestCase;
use App\GraphQL\Input\CollectibleInput;

class CollectibleInputTest extends TestCase
{
    public function testFieldsType() 
    {
        $collectibleInput = new CollectibleInput();
        $this->assertArrayHasKey('id', $collectibleInput->fields());
        $this->assertArrayHasKey('name', $collectibleInput->fields());
        $this->assertArrayHasKey('type', $collectibleInput->fields());
        $this->assertEquals('Int', $collectibleInput->fields()['id']['type']->name);
        $this->assertEquals('String', $collectibleInput->fields()['name']['type']->name);
        $this->assertEquals('String', $collectibleInput->fields()['type']['type']->name);        
    }
}
