<?php

namespace App\GraphQL\Queries;

use App\Models\Post;

class PostsResolver
{
    # For pagination use directives, its tricky Andre says.
    public function __invoke($_, array $args)
    {
        return Post::latest()->get();
    }
}
