<?php

namespace MMH\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="MMH\SiteBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="MMH\SiteBundle\Entity\imageArticle", mappedBy="article", cascade="remove")
     */
     private $imagearticle;

    /**
     * @ORM\ManyToOne(targetEntity="MMH\SiteBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Article
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set user
     *
     * @param \MMH\SiteBundle\Entity\User $user
     *
     * @return Article
     */
    public function setUser(\MMH\SiteBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \MMH\SiteBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->imagearticle = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateCreation = new \DateTime();
    }

    /**
     * Add imagearticle
     *
     * @param \MMH\SiteBundle\Entity\imageArticle $imagearticle
     *
     * @return Article
     */
    public function addImagearticle(\MMH\SiteBundle\Entity\imageArticle $imagearticle)
    {
        $this->imagearticle[] = $imagearticle;

        $imagearticle->setArticle($this);

        return $this;
    }

    /**
     * Remove imagearticle
     *
     * @param \MMH\SiteBundle\Entity\imageArticle $imagearticle
     */
    public function removeImagearticle(\MMH\SiteBundle\Entity\imageArticle $imagearticle)
    {
        $this->imagearticle->removeElement($imagearticle);
    }

    /**
     * Get imagearticle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImagearticle()
    {
        return $this->imagearticle;
    }

    // Public function made to display headImage on article for Easy Admin
    public function adminImage() {

     $images = $this->imagearticle;
     $display;

     foreach($images as $image) {
       if($image->getHeadImage() ) {
         $display = $image->getPath();
       }
     }
     return $display;
   }

    // Trying to implement magic function __toString()

    public function __toString() {

      return $this->title;
    }
}
