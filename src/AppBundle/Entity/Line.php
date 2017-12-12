<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Line
 *
 * @ORM\Table(name="line")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LineRepository")
 */
class Line
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
    * @ORM\ManyToOne(targetEntity="Network", inversedBy="lines")
    * @ORM\JoinColumn(name="network_id", referencedColumnName="id")
    */
    private $network;

    /**
    * @ORM\OneToMany(targetEntity="Stop", mappedBy="line")
    */
    private $stops;

    public function __toString()
    {
        return $this->name;
    }

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
     * @return Line
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
     * Set network
     *
     * @param \AppBundle\Entity\Network $network
     *
     * @return Line
     */
    public function setNetwork(\AppBundle\Entity\Network $network = null)
    {
        $this->network = $network;

        return $this;
    }

    /**
     * Get network
     *
     * @return \AppBundle\Entity\Network
     */
    public function getNetwork()
    {
        return $this->network;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stops = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add stop
     *
     * @param \AppBundle\Entity\Stop $stop
     *
     * @return Line
     */
    public function addStop(\AppBundle\Entity\Stop $stop)
    {
        $this->stops[] = $stop;

        return $this;
    }

    /**
     * Remove stop
     *
     * @param \AppBundle\Entity\Stop $stop
     */
    public function removeStop(\AppBundle\Entity\Stop $stop)
    {
        $this->stops->removeElement($stop);
    }

    /**
     * Get stops
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStops()
    {
        return $this->stops;
    }
}
