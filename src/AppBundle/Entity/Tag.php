<?php
/**
 * Created by PhpStorm.
 * User: marcel
 * Date: 10/03/2017
 * Time: 21:51
 */

namespace AppBundle\Entity;


class Tag
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}