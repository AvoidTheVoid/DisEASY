<?php
/**
 * Created by PhpStorm.
 * User: marcel
 * Date: 09/03/2017
 * Time: 22:06
 */

namespace AppBundle\Controller;

use AppBundle\Form\Type\DiseaseType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Disease;
use AppBundle\Entity\Tag;
use AppBundle\Entity\Ch_prz;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
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

        $tag1 = new Tag();
        $tag1->setName('przyczyny');
        $disease->getTags()->add($tag1);

        $tag2 = new Tag();
        $tag2->setName('objawy');
        $disease->getTags()->add($tag2);

        $tag3 = new Tag();
        $tag3->setName('pato');
        $disease->getTags()->add($tag3);

        $tag4 = new Tag();
        $tag4->setName('dod');
        $disease->getTags()->add($tag4);

        $form = $this->createForm(DiseaseType::class,$disease);



        $przyczyny= $this->getDoctrine()->getRepository('AppBundle:Przyczyny')->findAll();
       // print_r($przyczyny);

        foreach($przyczyny as $a)
        {
            if(!is_null($a->getLatin()))$latin=" / ".($a->getLatin());
            else $latin='';
            $prz_form[]=[
                $a->getId(),
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


            $last_id=$task->getId();
                foreach (explode("|",$task->getTags()[0]->getName()) as $pp) {
                    $ch_prz=new Ch_prz();
                    $zap = $this->getDoctrine()->getManager();
                    $ch_prz->setChId($last_id);
                    $ch_prz->setPrzId($pp);
                    $zap->persist($ch_prz);
                    $zap->flush();
                }

            //return $this->redirectToRoute('/disease/list');
        }
        return $this->render('disease/add.html.twig',array(
            'form' => $form->createView(),
            'przyczyny' => $prz_form,
        ));

    }
}