<?php
namespace App\Alireza\Domain\Entities;

use Mitch\LaravelDoctrine\Traits\Authentication;
use Doctrine\ORM\Mapping as ORM;
use Mitch\LaravelDoctrine\Traits\Timestamps;

/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 * @ORM\HasLifecycleCallbacks()
 */
class Post  {

    use Timestamps;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

   /**
     * @ORM\Column(type="string")
     */
    private $title;

   /**
     * @ORM\Column(type="text")
     */
    private $body;

    public function __construct($input)
    {
        $this->setTitle($input['title']);
        $this->setBody($input['body']);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)  
    {
        $this->title=$title;
    }

    public function setBody($body)  
    {
        $this->body=$body;
    }

    public function getBody()  
    {
        return $this->body;
    }
}
