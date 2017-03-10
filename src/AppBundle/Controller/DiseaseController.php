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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DiseaseController extends Controller
{

    /**
     * @Route("/disease/")
     */
    public function showList()
    {
        return $this->render('disease/list.html.twig');
    }

    /**
     * @Route("/disease/add")
     */
    public function addEntry(Request $request)
    {

        $disease = new Disease();

        $form = $this->createFormBuilder($disease)
            ->add('name')
            ->add('othernames')
            ->add('patogenesis')
            ->add('p_desc')
            ->add('epi')
            ->add('diagno')
            ->add('diff')
            ->add('save', SubmitType::class)
            ->getForm();
        $przyczyny= $this->getDoctrine()->getRepository('AppBundle:Przyczyny')->findAll();
       // print_r($przyczyny);

        foreach($przyczyny as $a)
        {
            if(!is_null($a->getLatin()))$latin=" / ".($a->getLatin());
            else $latin='';
            $prz_form[]=[
                ($a->getName()).$latin,
                $a->getType(),
            ];

        }
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            $zap = $this->getDoctrine()->getManager();
            $zap->persist($task);
            $zap->flush();

            //return $this->redirectToRoute('/disease/list');
        }
        return $this->render('disease/add.html.twig',array(
            'form' => $form->createView(),
            'przyczyny' => $prz_form,
        ));

    }
}