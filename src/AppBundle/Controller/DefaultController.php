<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Promotion;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $promotion = new Promotion;

        $form = $this->createFormBuilder($promotion)
            ->add('full_name', TextType::class, ['attr' => ['class' => 'form-control', 'style' => 'margin-bottom:10px']])
            ->add('mobile_number', TextType::class, ['attr' => ['class' => 'form-control', 'style' => 'margin-bottom:10px']])
            ->add('arrival_date', DateTimeType::class, ['attr' => ['class' => 'formcontrol', 'style' => 'margin-bottom:10px']])
            ->add('airport', ChoiceType::class, ['choices' => ['Heathrow' => 'Heathrow', 'Gatwick' => 'Gatwick'], 'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:10px']])
            ->add('terminal', ChoiceType::class, ['choices' => [1,2,3,4,5],  'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:10px']])
            ->add('flight_number', TextType::class, ['attr' => ['class' => 'form-control', 'style' => 'margin-bottom:10px']])
            ->add('submit', SubmitType::class, ['attr' => ['class' => 'btn btn-primary', 'style' => 'margin-bottom:10px']])
            ->getForm();
       
       $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $promotion->setFullName($form['full_name']->getData());
            $promotion->setMobileNumber($form['mobile_number']->getData());
            $promotion->setArrivalDate($form['arrival_date']->getData());
            $promotion->setAirport($form['airport']->getData());
            $promotion->setTerminal($form['terminal']->getData());
            $promotion->setFlightNumber($form['flight_number']->getData());

            $em = $this->getDoctrine()->getManager();

            $em->persist($promotion);
            $em->flush();

            $this->addFlash('notice', 'Submitted');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('default/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/promotion", name="create")
     * @Method("POST")
     */
    public function newAction(Request $request)
    {
        var_dump($request->request->get('Firstname'));

        die('all');
    }
}
