<?php

namespace MMH\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity(repositoryClass="MMH\SiteBundle\Repository\PaymentRepository")
 */
class Payment
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
     * @ORM\ManyToOne(targetEntity="MMH\SiteBundle\Entity\Project", inversedBy="payment")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePayment", type="datetime")
     */
    private $datePayment;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentFacility", type="string", length=255)
     */
    private $paymentFacility;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentReference", type="string", length=255, unique=true)
     */
    private $paymentReference;


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
     * Set name
     *
     * @param string $name
     *
     * @return Payment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Payment
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set datePayment
     *
     * @param \DateTime $datePayment
     *
     * @return Payment
     */
    public function setDatePayment($datePayment)
    {
        $this->datePayment = $datePayment;

        return $this;
    }

    /**
     * Get datePayment
     *
     * @return \DateTime
     */
    public function getDatePayment()
    {
        return $this->datePayment;
    }

    /**
     * Set paymentFacility
     *
     * @param string $paymentFacility
     *
     * @return Payment
     */
    public function setPaymentFacility($paymentFacility)
    {
        $this->paymentFacility = $paymentFacility;

        return $this;
    }

    /**
     * Get paymentFacility
     *
     * @return string
     */
    public function getPaymentFacility()
    {
        return $this->paymentFacility;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set paymentReference
     *
     * @param string $paymentReference
     *
     * @return Payment
     */
    public function setPaymentReference($paymentReference)
    {
        $this->paymentReference = $paymentReference;

        return $this;
    }

    /**
     * Get paymentReference
     *
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->paymentReference;
    }

    /**
     * Set project
     *
     * @param \MMH\SiteBundle\Entity\Project $project
     *
     * @return Payment
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

    // Trying to implement magic function __toString()

    public function __toString() {

      return $this->name;
    }
}
