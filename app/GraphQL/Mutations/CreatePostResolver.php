<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

class CreatePostResolver
{
    public function __invoke($_, array $args)
    {
        $post = Post::create([
            'user_id' => $args['user_id'],
            'title'   => $args['title'],
            'body'    => $args['body'],
        ]);

        //if you have extra functionalities like sending an email
        //reach for resolvers
        Log::info('Sending Email');

        return $post;
    }
}
