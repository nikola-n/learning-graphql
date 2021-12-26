<?php

namespace App\GraphQL\Queries;

use App\Models\Post;

class PostResolver
{
    public function __invoke($_, array $args)
    {
        return Post::where('id', $args['id'])->first();
    }
}
