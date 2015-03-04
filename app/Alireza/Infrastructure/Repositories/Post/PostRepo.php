<?php

namespace App\Alireza\Infrastructure\Repositories\Post;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
use App\Alireza\Domain\Entities\Post;

class PostRepo
{
    /**
     * @var EntityManager
     */
    private $em;
    /**
     * @var string
     */
    private $class;

    public function __construct(EntityManager $em)
    {
        $this->em    = $em;
        $this->class = 'App\Alireza\Domain\Entities\Post';
    }

    public function create(Post $post)
    {
        $this->em->persist($post);
        $this->em->flush();
    }

    public function update(Post $post,$data)
    {
        $post->setTitle($data['title']);
        $post->setBody($data['body']);
        $post->em->persist($post);
        $post->em->flush();
    }

    public function PostOfId($id)
    {
        return $this->em->getRepository($this->class)->findOneBy([
            'id' => $id
        ]);
    }

    /**
     * create Post
     * @return Post
     */
    public function perpare_data($data)
    {
        return new Post($data);
    }

}
