<?php

namespace Bbd\BongoCricketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Match
 */
class Match
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $home_team;

    /**
     * @var string
     */
    private $away_team;

    /**
     * @var integer
     */
    private $match_number;

    /**
     * @var string
     */
    private $match_type;

    /**
     * @var \DateTime
     */
    private $match_date;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set homeTeam
     *
     * @param string $homeTeam
     *
     * @return Match
     */
    public function setHomeTeam($homeTeam)
    {
        $this->home_team = $homeTeam;

        return $this;
    }

    /**
     * Get homeTeam
     *
     * @return string
     */
    public function getHomeTeam()
    {
        return $this->home_team;
    }

    /**
     * Set awayTeam
     *
     * @param string $awayTeam
     *
     * @return Match
     */
    public function setAwayTeam($awayTeam)
    {
        $this->away_team = $awayTeam;

        return $this;
    }

    /**
     * Get awayTeam
     *
     * @return string
     */
    public function getAwayTeam()
    {
        return $this->away_team;
    }

    /**
     * Set matchNumber
     *
     * @param integer $matchNumber
     *
     * @return Match
     */
    public function setMatchNumber($matchNumber)
    {
        $this->match_number = $matchNumber;

        return $this;
    }

    /**
     * Get matchNumber
     *
     * @return integer
     */
    public function getMatchNumber()
    {
        return $this->match_number;
    }

    /**
     * Set matchType
     *
     * @param string $matchType
     *
     * @return Match
     */
    public function setMatchType($matchType)
    {
        $this->match_type = $matchType;

        return $this;
    }

    /**
     * Get matchType
     *
     * @return string
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * Set matchDate
     *
     * @param \DateTime $matchDate
     *
     * @return Match
     */
    public function setMatchDate($matchDate)
    {
        $this->match_date = $matchDate;

        return $this;
    }

    /**
     * Get matchDate
     *
     * @return \DateTime
     */
    public function getMatchDate()
    {
        return $this->match_date;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Match
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Match
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->created_at = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdateAtValue()
    {
        $this->updated_at = new \DateTime();
    }



}

