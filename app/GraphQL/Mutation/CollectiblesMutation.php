<?php
namespace App\GraphQL\Mutation;

use GraphQL;
use Rebing\GraphQL\Support\Mutation;
use App\Models\Collectible;

class CollectiblesMutation extends Mutation
{
    protected $attributes = [
        'name' => 'collectibles',
        'description' => 'Create/update a collectible'
    ];

    public function type()
    {
        return GraphQL::type('collectibleType');
    }

    public function args()
    {
        return [
            'collectible' => [
                'name' => 'collectible',
                'type' => GraphQL::type('collectibleInput'),
                'description' => 'collectible'
            ]
        ];
    }

    /**
     * @SuppressWarnings("unused")
     */
    public function resolve($root, $args)
    {
        if (!isset($args['collectible']['id'])) {
            $collectible = Collectible::create($args['collectible']);            
            return $collectible;
        }

        $collectible = Collectible::findOrFail($args['collectible']['id']);
        $collectible->update($args['collectible']);
        
        return $collectible;
    }
}
