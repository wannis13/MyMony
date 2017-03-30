<?php

namespace MMH\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

// use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
* Project
*
* @ORM\Table(name="project")
* @ORM\Entity(repositoryClass="MMH\SiteBundle\Repository\ProjectRepository")
*/
class Project
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
  * @Gedmo\Slug(fields={"title"})
  * @ORM\Column(name="slug", type="string", length=255, unique=true)
  */
  private $slug;


  /**
  * @ORM\OneToMany(targetEntity="MMH\SiteBundle\Entity\Payment", mappedBy="project", cascade={"remove"})
  */
  private $payment;

  /**
  * @ORM\OneToMany(targetEntity="MMH\SiteBundle\Entity\imageProject", mappedBy="project", cascade={"remove"})
  */
  private $imageproject;

  /**
  * @ORM\OneToMany(targetEntity="MMH\SiteBundle\Entity\Amount", mappedBy="project", cascade={"remove"})
  */
  private $amount;

  /**
  * @ORM\ManyToOne(targetEntity="MMH\SiteBundle\Entity\User")
  * @ORM\JoinColumn(nullable=true)
  */
  private $user;

  /**
  * @ORM\ManyToOne(targetEntity="MMH\SiteBundle\Entity\category")
  * @ORM\JoinColumn(nullable=false)
  */
  private $category;


  /**
  * @var string
  *
  * @ORM\Column(name="title", type="string", length=255, unique=true)
  */
  private $title;

  /**
  * @var string
  *
  * @ORM\Column(name="headline", type="string", length=65, unique=true)
  */
  private $headline;

  /**
  * @var string
  *
  * @ORM\Column(name="text", type="text")
  */
  private $text;

  /**
  * @var int
  *
  * @ORM\Column(name="finalObjective", type="integer")
  */
  private $finalObjective;

  /**
  * @var bool
  *
  * @ORM\Column(name="status", type="boolean")
  */
  private $status;

  /**
  * @var bool
  *
  * @ORM\Column(name="visibility", type="boolean")
  */
  private $visibility;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="endDate", type="datetime")
  */
  private $endDate;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="startDate", type="datetime")
  */
  private $startDate;

  /**
  * @var bool
  *
  * @ORM\Column(name="slider", type="boolean")
  */
  private $slider;

  /**
  * @var string
  *
  * @ORM\Column(name="facebook", type="string", length=255, unique=true, nullable=true)
  */
  private $facebook;

  /**
  * @var string
  *
  * @ORM\Column(name="twitter", type="string", length=255, unique=true, nullable=true)
  */
  private $twitter;

  /**
  * @var string
  *
  * @ORM\Column(name="linkedin", type="string", length=255, unique=true, nullable=true)
  */
  private $linkedin;

  /**
  * @var string
  *
  * @ORM\Column(name="pinterest", type="string", length=255, unique=true, nullable=true)
  */
  private $pinterest;

  /**
   * @ORM\ManyToMany(targetEntity="MMH\SiteBundle\Entity\Value", cascade={"persist"})
   */

  private $values;

  /**
  * @ORM\OneToMany(targetEntity="MMH\SiteBundle\Entity\Comment", mappedBy="project", cascade={"remove"})
  */
  private $comments;



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
  * @return Project
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
  * Set text
  *
  * @param string $text
  *
  * @return Project
  */
  public function setText($text)
  {
    $this->text = $text;

    return $this;
  }

  /**
  * Get text
  *
  * @return string
  */
  public function getText()
  {
    return $this->text;
  }


  /**
  * Set status
  *
  * @param boolean $status
  *
  * @return Project
  */
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }

  /**
  * Get status
  *
  * @return bool
  */
  public function getStatus()
  {
    return $this->status;
  }


  /**
  * Set startDate
  *
  * @param \DateTime $startDate
  *
  * @return Project
  */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;

    return $this;
  }

  /**
  * Get startDate
  *
  * @return \DateTime
  */
  public function getStartDate()
  {
    return $this->startDate;
  }

  /**
  * Set finalObjective
  *
  * @param integer $finalObjective
  *
  * @return Project
  */
  public function setFinalObjective($finalObjective)
  {
    $this->finalObjective = $finalObjective;

    return $this;
  }

  /**
  * Get finalObjective
  *
  * @return integer
  */
  public function getFinalObjective()
  {
    return $this->finalObjective;
  }

  /**
  * Set endDate
  *
  * @param \DateTime $endDate
  *
  * @return Project
  */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;

    return $this;
  }

  /**
  * Get endDate
  *
  * @return \DateTime
  */
  public function getEndDate()
  {
    return $this->endDate;
  }

  /**
  * Set headline
  *
  * @param string $headline
  *
  * @return Project
  */
  public function setHeadline($headline)
  {
    $this->headline = $headline;

    return $this;
  }

  /**
  * Get headline
  *
  * @return string
  */
  public function getHeadline()
  {
    return $this->headline;
  }

  /**
  * Set slug
  *
  * @param string $slug
  *
  * @return Project
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
    $this->payment = new \Doctrine\Common\Collections\ArrayCollection();
    $this->values = new \Doctrine\Common\Collections\ArrayCollection();
    $this->startDate = new \DateTime();
    $this->status = true;
  }

  /**
  * Add payment
  *
  * @param \MMH\SiteBundle\Entity\Payment $payment
  *
  * @return Project
  */
  public function addPayment(\MMH\SiteBundle\Entity\Payment $payment)
  {
    $this->payment[] = $payment;

    $payment->setProject($this);

    return $this;
  }

  /**
  * Remove payment
  *
  * @param \MMH\SiteBundle\Entity\Payment $payment
  */
  public function removePayment(\MMH\SiteBundle\Entity\Payment $payment)
  {
    $this->payment->removeElement($payment);
  }

  /**
  * Get payment
  *
  * @return \Doctrine\Common\Collections\Collection
  */
  public function getPayment()
  {
    return $this->payment;
  }

  /**
  * Add imageproject
  *
  * @param \MMH\SiteBundle\Entity\imageProject $imageproject
  *
  * @return Project
  */
  public function addImageproject(\MMH\SiteBundle\Entity\imageProject $imageproject)
  {
    $this->imageproject[] = $imageproject;

    $imageproject->setProject($this);

    return $this;
  }

  /**
  * Remove imageproject
  *
  * @param \MMH\SiteBundle\Entity\imageProject $imageproject
  */
  public function removeImageproject(\MMH\SiteBundle\Entity\imageProject $imageproject)
  {
    $this->imageproject->removeElement($imageproject);
  }

  /**
  * Get imageproject
  *
  * @return \Doctrine\Common\Collections\Collection
  */
  public function getImageproject()
  {
    return $this->imageproject;
  }

  /**
  * Set slider
  *
  * @param boolean $slider
  *
  * @return Project
  */
  public function setSlider($slider)
  {
    $this->slider = $slider;

    return $this;
  }

  /**
  * Get slider
  *
  * @return boolean
  */
  public function getSlider()
  {
    return $this->slider;
  }

  /**
  * Set facebook
  *
  * @param string $facebook
  *
  * @return Project
  */
  public function setFacebook($facebook)
  {
    $this->facebook = $facebook;

    return $this;
  }

  /**
  * Get facebook
  *
  * @return string
  */
  public function getFacebook()
  {
    return $this->facebook;
  }

  /**
  * Set twitter
  *
  * @param string $twitter
  *
  * @return Project
  */
  public function setTwitter($twitter)
  {
    $this->twitter = $twitter;

    return $this;
  }

  /**
  * Get twitter
  *
  * @return string
  */
  public function getTwitter()
  {
    return $this->twitter;
  }

  /**
  * Set linkedin
  *
  * @param string $linkedin
  *
  * @return Project
  */
  public function setLinkedin($linkedin)
  {
    $this->linkedin = $linkedin;

    return $this;
  }

  /**
  * Get linkedin
  *
  * @return string
  */
  public function getLinkedin()
  {
    return $this->linkedin;
  }

  /**
  * Set pinterest
  *
  * @param string $pinterest
  *
  * @return Project
  */
  public function setPinterest($pinterest)
  {
    $this->pinterest = $pinterest;

    return $this;
  }

  /**
  * Get pinterest
  *
  * @return string
  */
  public function getPinterest()
  {
    return $this->pinterest;
  }

  /**
  * Set user
  *
  * @param \MMH\SiteBundle\Entity\User $user
  *
  * @return Project
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
  * Set projectuser
  *
  * @param \MMH\SiteBundle\Entity\User $projectuser
  *
  * @return Project
  */
  public function setProjectuser(\MMH\SiteBundle\Entity\User $projectuser)
  {
    $this->projectuser = $projectuser;

    return $this;
  }

  /**
  * Get projectuser
  *
  * @return \MMH\SiteBundle\Entity\User
  */
  public function getProjectuser()
  {
    return $this->projectuser;
  }

  /**

  * Set category
  *
  * @param \MMH\SiteBundle\Entity\category $category
  *
  * @return Project
  */
  public function setCategory(\MMH\SiteBundle\Entity\category $category)
  {
    $this->category = $category;

    return $this;
  }

  /**
  * Set visibility
  *
  * @param boolean $visibility
  *
  * @return Project
  */

  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;


    return $this;
  }

  /**
  * Get category
  *
  * @return \MMH\SiteBundle\Entity\category
  */
  public function getCategory()
  {
    return $this->category;
  }

  /**
  * Get visibility
  *
  * @return boolean
  */
  public function getVisibility()
  {
    return $this->visibility;

  }

    /**
     * Add amount
     *
     * @param \MMH\SiteBundle\Entity\Amount $amount
     *
     * @return Project
     */
    public function addAmount(\MMH\SiteBundle\Entity\Amount $amount)
    {
        $this->amount[] = $amount;
        $amount->setProject($this);

        return $this;
    }

    /**
     * Remove amount
     *
     * @param \MMH\SiteBundle\Entity\Amount $amount
     */
    public function removeAmount(\MMH\SiteBundle\Entity\Amount $amount)
    {
        $this->amount->removeElement($amount);
    }

    /**
     * Get amount
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Add value
     *
     * @param \MMH\SiteBundle\Entity\Value $value
     *
     * @return Project
     */
    public function addValue(\MMH\SiteBundle\Entity\Value $value)
    {
        $this->values[] = $value;

        return $this;
    }

    /**
     * Remove value
     *
     * @param \MMH\SiteBundle\Entity\Value $value
     */
    public function removeValue(\MMH\SiteBundle\Entity\Value $value)
    {
        $this->values->removeElement($value);
    }

    /**
     * Get values
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getValues()
    {
        return $this->values;
    }

    // Trying to implement magic function __toString()

    public function __toString() {

      return $this->title;
    }

    // Public function made to generate virtual property for Easy Admin
    public function getTotal() {

      $payments = $this->getPayment();

      $arr = [];
      $cash = 0;

      foreach( $payments as $payment) {
        $arr[] = $payment->getAmount();
      }

      for($i = 0; $i < count($arr); $i++) {
        $cash = $cash + $arr[$i];
      }

      return $cash;
    }

    // Public function made to display headImage on project for Easy Admin
    public function adminImage() {

     $images = $this->imageproject;
     $display;

     foreach($images as $image) {
       if($image->getHeadImage() ) {
         $display = $image->getPath();
       }
     }
     return $display;
   }

    /**
     * Add comment
     *
     * @param \MMH\SiteBundle\Entity\Comment $comment
     *
     * @return Project
     */
    public function addComment(\MMH\SiteBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;
        $comment->setProject($this);

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \MMH\SiteBundle\Entity\Comment $comment
     */
    public function removeComment(\MMH\SiteBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}
