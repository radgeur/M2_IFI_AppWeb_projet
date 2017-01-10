<?php
/**
 * Created by PhpStorm.
 * User: Nathanael
 * Date: 10/01/2017
 * Time: 16:15
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Episode
 * @package AppBundle\Entity
 * @ORM\Entity()
 */
class Episode
{
    /**
     * @var string
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="guid")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(type="string",nullable=true)
     */
    private $name;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $episodeNumber;

    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $datePublished;

    /**
     * @var string
     * @ManyToOne(targetEntity="TVSeries")
     * @JoinColumn(name="id", referencedColumnName="id")
     * @ORM\Column(type="guid")
     */
    private $tv_series_id;

    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $image;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getEpisodeNumber()
    {
        return $this->episodeNumber;
    }

    /**
     * @param int $episodeNumber
     */
    public function setEpisodeNumber($episodeNumber)
    {
        $this->episodeNumber = $episodeNumber;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param \DateTimeInterface $datePublished
     */
    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
    }

    /**
     * @return string
     */
    public function getTvSeriesId()
    {
        return $this->tv_series_id;
    }

    /**
     * @param string $tv_series_id
     */
    public function setTvSeriesId($tv_series_id)
    {
        $this->tv_series_id = $tv_series_id;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }



}