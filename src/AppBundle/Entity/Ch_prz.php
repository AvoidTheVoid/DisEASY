<?php
/**
 * Created by PhpStorm.
 * User: marcel
 * Date: 10/03/2017
 * Time: 21:01
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ch_prz")
 */

class Ch_prz
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ch_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $prz_id;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getChId()
    {
        return $this->ch_id;
    }

    /**
     * @return mixed
     */
    public function getPrzId()
    {
        return $this->prz_id;
    }

    /**
     * @param mixed $ch_id
     */
    public function setChId($ch_id)
    {
        $this->ch_id = $ch_id;
    }

    /**
     * @param mixed $prz_id
     */
    public function setPrzId($prz_id)
    {
        $this->prz_id = $prz_id;
    }
}