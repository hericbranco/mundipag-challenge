<?php

namespace App\GraphQL\Query;

use App\Models\Collectible;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class CollectiblesQuery extends Query
{
    protected $attributes = [
        'name' => 'Collectibles query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('collectibleType'));
    }

    public function args()
    {
        return [
            'page' => [
                'name' => 'page',
                'type' => Type::nonNull(Type::int()),
                'description' => 'Initial page of the result',
                'rules' => ['required']
            ],
            'limit' => [
                'name' => 'limit',
                'type' => Type::nonNull(Type::int()),
                'description' => 'Max amount of data to be retrieved',
                'rules' => ['required']
            ],
            'filter' => [
                'name' => 'filter',
                'type' => GraphQL::type('collectibleInput'),
                'description' => 'Filter'
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $collectibles = new Collectible();
        
        foreach ($args['filter'] as $arg => $value) {
            $collectibles = $collectibles->where($arg, 'like',  '%'.$value.'%');
        }
        return $collectibles->get();
    }
}