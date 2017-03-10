<?php
/**
 * Created by PhpStorm.
 * User: marcel
 * Date: 09/03/2017
 * Time: 22:06
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Disease;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DiseaseController extends Controller
{

    /**
     * @Route("/disease")
     */
    public function showList(){
        return $this->render('disease/list.html.twig');
    }
    /**
     * @Route("/disease/add")
     */
    public function addEntry(Request $request){

        $task = new Disease();
        $task->setId(1);

      /*  $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();*/
        return $this->render('disease/add.html.twig');
    }
}