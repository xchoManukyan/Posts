<?php

namespace App\Repositories;

use App\Post;
use Illuminate\Contracts\Container\Container;
use Rinvex\Repository\Repositories\EloquentRepository;

class PostRepository extends  EloquentRepository implements PostRepositoryInterface
{
    public function __construct(Container $container)
    {
        $this->setContainer($container)
            ->setModel(Post::class)
            ->setRepositoryId('nyt.repository.posts');
    }
}