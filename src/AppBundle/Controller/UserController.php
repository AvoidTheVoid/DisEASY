<?php
/**
 * Created by PhpStorm.
 * User: marcel
 * Date: 07/03/2017
 * Time: 20:36
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController
{
    /**
     * @Route("/user/get")
     */
    public function getUser()
    {
        return $this->render('user/get.html.twig', array(
            'name' => "Andrzej Dupa",
        ));
    }


}