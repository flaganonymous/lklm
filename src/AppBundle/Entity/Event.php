<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
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
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="avatarIndex", type="string", length=10)
     */
    private $avatarIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="nicename", type="string", length=255)
     */
    private $nicename;


    /**
     * @var string
     *
     * @ORM\Column(name="textEmail", type="string", length=255)
     */
    private $textEmail;


    /**
     * @var string
     *
     * @ORM\Column(name="textDate", type="string", length=10 ,nullable=true)
     */
    private $textDate;

    /**
     * @var string
     *
     * @ORM\Column(name="textSlogan", type="string", length=255, nullable=true)
     */
    private $textSlogan;

    /**
     * @var string
     *
     * @ORM\Column(name="myClass", type="string", length=255, nullable=true)
     */
    private $myClass;

    /**
     * @var string
     *
     * @ORM\Column(name="myFavoriteSubject", type="string", length=255, nullable=true)
     */
    private $myFavoriteSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="myBestNotation", type="string", length=255, nullable=true)
     */
    private $myBestNotation;

    /**
     * @var string
     *
     * @ORM\Column(name="myDiploma", type="string", length=255, nullable=true)
     */
    private $myDiploma;

    /**
     * @var string
     *
     * @ORM\Column(name="myReward", type="string", length=255, nullable=true)
     */
    private $myReward;

    /**
     * @var string
     *
     * @ORM\Column(name="myTrainer", type="text", nullable=true)
     */
    private $myTrainer;

    /**
     * @var string
     *
     * @ORM\Column(name="myMovie", type="text", nullable=true)
     */
    private $myMovie;

     /**
     * @var string
     *
     * @ORM\Column(name="myCitation", type="text", nullable=true)
     */
    private $myCitation;

     /**
     * @var string
     *
     * @ORM\Column(name="myValue", type="text", nullable=true)
     */
    private $myValue;

     /**
     * @var string
     *
     * @ORM\Column(name="myInterrest", type="text", nullable=true)
     */
    private $myInterrest;

    /**
     * @var string
     *
     * @ORM\Column(name="myHobby", type="text", nullable=true)
     */
    private $myHobby;

     /**
     * @var string
     *
     * @ORM\Column(name="textReve", type="text", nullable=true)
     */
    private $textReve;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="datetime")
     */
    private $creation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="altercation", type="boolean", nullable=true)
     */
    private $altercation;

    /**
     * @var array
     *
     * @ORM\Column(name="category", type="json_array", nullable=true)
     */
    private $category;

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
     * Set user
     *
     * @param string $user
     *
     * @return Event
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set avatarIndex
     *
     * @param string $avatarIndex
     *
     * @return Event
     */
    public function setAvatarIndex($avatarIndex)
    {
        $this->avatarIndex = $avatarIndex;

        return $this;
    }

    /**
     * Get avatarIndex
     *
     * @return string
     */
    public function getAvatarIndex()
    {
        return $this->avatarIndex;
    }

    /**
     * Set nicename
     *
     * @param string $nicename
     *
     * @return Event
     */
    public function setNicename($nicename)
    {
        $this->nicename = $nicename;

        return $this;
    }

    /**
     * Get nicename
     *
     * @return string
     */
    public function getNicename()
    {
        return $this->nicename;
    }

    /**
     * Set textEmail
     *
     * @param string $textEmail
     *
     * @return Event
     */
    public function setTextEmail($textEmail)
    {
        $this->textEmail = $textEmail;

        return $this;
    }

    /**
     * Get textEmail
     *
     * @return string
     */
    public function getTextEmail()
    {
        return $this->textEmail;
    }

    /**
     * Set textDate
     *
     * @param string $textDate
     *
     * @return Event
     */
    public function setTextDate($textDate)
    {
        $this->textDate = $textDate;

        return $this;
    }

    /**
     * Get textDate
     *
     * @return string
     */
    public function getTextDate()
    {
        return $this->textDate;
    }

    /**
     * Set textSlogan
     *
     * @param string $textSlogan
     *
     * @return Event
     */
    public function setTextSlogan($textSlogan)
    {
        $this->textSlogan = $textSlogan;

        return $this;
    }

    /**
     * Get textSlogan
     *
     * @return string
     */
    public function getTextSolgan()
    {
        return $this->textSlogan;
    }

    /**
     * Set myClass
     *
     * @param string $myClass
     *
     * @return Event
     */
    public function setMyClass($myClass)
    {
        $this->myClass = $myClass;

        return $this;
    }

    /**
     * Get myClass
     *
     * @return string
     */
    public function getMyClass()
    {
        return $this->myClass;
    }

    /**
     * Set myFavoriteSubject
     *
     * @param string $myFavoriteSubject
     *
     * @return Event
     */
    public function setMyFavoriteSubject($myFavoriteSubject)
    {
        $this->myFavoriteSubject = $myFavoriteSubject;

        return $this;
    }

    /**
     * Get myFavoriteSubject
     *
     * @return string
     */
    public function getMyFavoriteSubject()
    {
        return $this->myFavoriteSubject;
    }

    /**
     * Set myBestNotation
     *
     * @param string $myBestNotation
     *
     * @return Event
     */
    public function setMyBestNotation($myBestNotation)
    {
        $this->myBestNotation = $myBestNotation;

        return $this;
    }

    /**
     * Get myBestNotation
     *
     * @return string
     */
    public function getMyBestNotation()
    {
        return $this->myBestNotation;
    }

    /**
     * Set myDiploma
     *
     * @param string $myDiploma
     *
     * @return Event
     */
    public function setMyDiploma($myDiploma)
    {
        $this->myDiploma = $myDiploma;

        return $this;
    }

    /**
     * Get myDiploma
     *
     * @return string
     */
    public function getMyDiploma()
    {
        return $this->myDiploma;
    }

    /**
     * Set myReward
     *
     * @param string $myReward
     *
     * @return Event
     */
    public function setMyReward($myReward)
    {
        $this->myReward = $myReward;

        return $this;
    }

    /**
     * Get myReward
     *
     * @return string
     */
    public function getMyReward()
    {
        return $this->myReward;
    }

    /**
     * Set myTrainer
     *
     * @param string $myTrainer
     *
     * @return Event
     */
    public function setMyTrainer($myTrainer)
    {
        $this->myTrainer = $myTrainer;

        return $this;
    }

    /**
     * Get myTrainer
     *
     * @return string
     */
    public function getMytrainer()
    {
        return $this->myTrainer;
    }

    /**
     * Set myMovie
     *
     * @param string $myMovie
     *
     * @return Event
     */
    public function setMyMovie($myMovie)
    {
        $this->myMovie = $myMovie;

        return $this;
    }

    /**
     * Get myMovie
     *
     * @return string
     */
    public function getMyMovie()
    {
        return $this->myMovie;
    }

    /**
     * Set myCitation
     *
     * @param string $myCitation
     *
     * @return Event
     */
    public function setMyCitation($myCitation)
    {
        $this->myCitation = $myCitation;

        return $this;
    }

    /**
     * Get myCitation
     *
     * @return string
     */
    public function getMyCitation()
    {
        return $this->myCitation;
    }

    /**
     * Set myValue
     *
     * @param string $myValue
     *
     * @return Event
     */
    public function setMyValue($myValue)
    {
        $this->myValue = $myValue;

        return $this;
    }

    /**
     * Get myValue
     *
     * @return string
     */
    public function getMyValue()
    {
        return $this->myValue;
    }

    /**
     * Set myInterest
     *
     * @param string $myInterest
     *
     * @return Event
     */
    public function setMyInterest($myInterest)
    {
        $this->myInterest = $myInterest;

        return $this;
    }

    /**
     * Get myInterest
     *
     * @return string
     */

    public function getMyInterest()
    {
        return $this->myInterest;
    }

    /**
     * Set myHobby
     *
     * @param string $myHobby
     *
     * @return Event
     */
     
    public function setMyHobby($myHobby)
    {
        $this->myHobby = $myHobby;

        return $this;
    }

    /**
     * Get myHobby
     *
     * @return string
     */
    public function getMyHobby()
    {
        return $this->myHobby;
    }

    /**
     * Set textReve
     *
     * @param string $textReve
     *
     * @return Event
     */
    public function setTextReve($textReve)
    {
        $this->textReve = $textReve;

        return $this;
    }

    /**
     * Get textReve
     *
     * @return string
     */
    public function getTextReve()
    {
        return $this->textReve;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Event
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
 
     /**
      * Get category
      *
      * @return string
      */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set altercation
     *
     * @param boolean $altercation
     *
     * @return Event
     */
    public function setAltercation($altercation)
    {
        $this->altercation = $altercation;

        return $this;
    }

    /**
     * Get altercation
     *
     * @return boolean
     */
    public function getAltercation()
    {
        return $this->altercation;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     *
     * @return Event
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }

}
