<?php

namespace App\GraphQL\Type;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CollectibleType extends GraphQLType
{
        
    protected $attributes = [
        'name' => 'CollectibleType',
        'description' => 'List collectibles'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'id'                
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'Name'
            ],
            'type' => [
                'type' => Type::string(),
                'description' => 'Type'
            ]
        ];
    }
}
