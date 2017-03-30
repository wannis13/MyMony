<?php

namespace MMH\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * imageProject
 *
 * @ORM\Table(name="image_project")
 * @ORM\Entity(repositoryClass="MMH\SiteBundle\Repository\imageProjectRepository")
 * @Vich\Uploadable
 */
class imageProject
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
     * @ORM\ManyToOne(targetEntity="MMH\SiteBundle\Entity\Project", inversedBy="imageproject")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var bool
     *
     * @ORM\Column(name="headImage", type="boolean")
     */
    private $headImage;

    /**
     * @var bool
     *
     * @ORM\Column(name="bodyImage", type="boolean")
     */
    private $bodyImage;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @Vich\UploadableField(mapping="project_images", fileNameProperty="path")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;




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
     * Set path
     *
     * @param string $path
     *
     * @return imageProject
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set project
     *
     * @param \MMH\SiteBundle\Entity\Project $project
     *
     * @return imageProject
     */
    public function setProject(\MMH\SiteBundle\Entity\Project $project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \MMH\SiteBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set headImage
     *
     * @param boolean $headImage
     *
     * @return imageProject
     */
    public function setHeadImage($headImage)
    {
        $this->headImage = $headImage;

        return $this;
    }

    /**
     * Get headImage
     *
     * @return boolean
     */
    public function getHeadImage()
    {
        return $this->headImage;
    }

    /**
     * Set bodyImage
     *
     * @param boolean $bodyImage
     *
     * @return imageProject
     */
    public function setBodyImage($bodyImage)
    {
        $this->bodyImage = $bodyImage;

        return $this;
    }

    /**
     * Get bodyImage
     *
     * @return boolean
     */
    public function getBodyImage()
    {
        return $this->bodyImage;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return imageProject
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    // Trying to implement magic function __toString()

    public function __toString() {
      // return $this->imageFile;
      // fix to make project clickable from imageproject list view in easyadmin
      return $this->path;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return imageProject
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    // Image file functions
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
    * Constructor
    */
    public function __construct()
    {
      $this->updatedAt = new \DateTime();
    }

    // Virtual property function that output image url on server for easy pasting in text editor
    public function localPath() {
        $prefix = "http://localhost/mymoneyhelp/web/bundles/mmhsite/img/projets/";
        $url = $prefix . $this->getPath();
        return $url;
    }
}
