<?php
namespace AppBundle\Entity;
/**
 * Created by PhpStorm.
 * User: marcel
 * Date: 09/03/2017
 * Time: 22:33
 */
class Disease
{
    protected $id;
    protected $name;
    protected $othernames;
    protected $epi;
    protected $patogenesis;
    protected $p_desc;
    protected $diagno;
    protected $diff;

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
}