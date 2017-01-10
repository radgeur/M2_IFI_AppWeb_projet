<?php
/**
 * Created by PhpStorm.
 * User: Nathanael
 * Date: 10/01/2017
 * Time: 17:13
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * UserEpisode
 * @package AppBundle\Entity
 * @ORM\Entity()
 */
class UserEpisode
{
    /**
     * @var string
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="guid")
     * @ORM\ManyToOne(targetEntity="User")
     * @JoinColumn(name="id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @var string
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="guid")
     * @ORM\ManyToOne(targetEntity="Episode")
     * @JoinColumn(name="id", referencedColumnName="id")
     */
    private $episode_id;

    /**
     * @var bool
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $current;

    /**
    * @var \DateTimeInterface
    * @ORM\Column(type="datetime",nullable=true)
    */
    private $watchedAt;

}