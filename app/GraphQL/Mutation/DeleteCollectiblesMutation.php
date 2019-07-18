<?php
namespace App\GraphQL\Mutation;

use GraphQL;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use App\Models\Collectible;

class DeleteCollectiblesMutation extends Mutation
{
    protected $attributes = [
        'name' => 'delete collectibles',
        'description' => 'Delete a collectible'
    ];

    public function type()
    {
        return Type::string();
    }

    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::nonNull(Type::int()),
                'description' => 'id'
            ]
        ];
    }

    /**
     * @SuppressWarnings("unused")
     */
    public function resolve($root, $args)
    {
        $collectible = Collectible::findOrFail($args['id']);
        if ($collectible->delete()) {
            return 'success';
        }
        return 'error';
    }
}
