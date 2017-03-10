<?php
namespace AppBundle\Entity;
/**
 * Created by PhpStorm.
 * User: marcel
 * Date: 09/03/2017
 * Time: 22:33
 */

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="choroby")
 */
class Disease
{
    protected $tags;
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $othernames;

    /**
     * @ORM\Column(type="text")
     */
    private $epi;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $patogenesis;

    /**
     * @ORM\Column(type="text")
     */
    private $p_desc;

    /**
     * @ORM\Column(type="text")
     */
    private $diagno;

    /**
     * @ORM\Column(type="text")
     */
    private $diff;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDiagno()
    {
        return $this->diagno;
    }

    /**
     * @return mixed
     */
    public function getDiff()
    {
        return $this->diff;
    }

    /**
     * @return mixed
     */
    public function getEpi()
    {
        return $this->epi;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getOthernames()
    {
        return $this->othernames;
    }

    /**
     * @return mixed
     */
    public function getPatogenesis()
    {
        return $this->patogenesis;
    }

    /**
     * @return mixed
     */
    public function getPDesc()
    {
        return $this->p_desc;
    }

    /**
     * @param mixed $diagno
     */
    public function setDiagno($diagno)
    {
        $this->diagno = $diagno;
    }

    /**
     * @param mixed $diff
     */
    public function setDiff($diff)
    {
        $this->diff = $diff;
    }

    /**
     * @param mixed $epi
     */
    public function setEpi($epi)
    {
        $this->epi = $epi;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $othernames
     */
    public function setOthernames($othernames)
    {
        $this->othernames = $othernames;
    }

    /**
     * @param mixed $patogenesis
     */
    public function setPatogenesis($patogenesis)
    {
        $this->patogenesis = $patogenesis;
    }

    /**
     * @param mixed $p_desc
     */
    public function setPDesc($p_desc)
    {
        $this->p_desc = $p_desc;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
}