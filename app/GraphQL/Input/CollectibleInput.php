<?php

namespace App\GraphQL\Input;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CollectibleInput extends GraphQLType
{
    protected $inputObject = true;    
    protected $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = [
            'name' => 'CollectibleInput',
            'description' => ''
        ];
        parent::__construct($attributes);
    }

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'id'                
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'name'
            ],
            'type' => [
                'type' => Type::string(),
                'description' => 'type'
            ]
        ];
    }
}
