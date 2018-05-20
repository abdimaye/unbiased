<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromotionRepository")
 */
class Promotion
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
     * @ORM\Column(name="full_name", type="string", length=255)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_number", type="string", length=15, nullable=true)
     */
    private $mobileNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrival_date", type="datetime")
     */
    private $arrivalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="airport", type="string", length=255)
     */
    private $airport;

    /**
     * @var string
     *
     * @ORM\Column(name="terminal", type="string", length=255, nullable=true)
     */
    private $terminal;

    /**
     * @var int
     *
     * @ORM\Column(name="flight_number", type="integer")
     */
    private $flightNumber;


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
     * Set fullName
     *
     * @param string $fullName
     *
     * @return Promotion
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set mobileNumber
     *
     * @param string $mobileNumber
     *
     * @return Promotion
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Get mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Set arrivalDate
     *
     * @param \DateTime $arrivalDate
     *
     * @return Promotion
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Get arrivalDate
     *
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Set airport
     *
     * @param string $airport
     *
     * @return Promotion
     */
    public function setAirport($airport)
    {
        $this->airport = $airport;

        return $this;
    }

    /**
     * Get airport
     *
     * @return string
     */
    public function getAirport()
    {
        return $this->airport;
    }

    /**
     * Set terminal
     *
     * @param string $terminal
     *
     * @return Promotion
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * Get terminal
     *
     * @return string
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * Set flightNumber
     *
     * @param integer $flightNumber
     *
     * @return Promotion
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Get flightNumber
     *
     * @return int
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }
}

