<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Events;
Use App\Form\EventsType;

class EventController extends AbstractController
{
    #[Route('/', name: 'app_event')]
    public function index(ManagerRegistry $doctrine): Response //ManagerRegistry: class //$doctrine: variable
    {
        $events = $doctrine->getRepository(Events::class)->findAll();
        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }


    // #[Route('/create', name: 'app_create')]
    // public function create(): Response
    // {
    //     return $this->render('event/create.html.twig', [
            
    //     ]);
    // }

    #[Route('/create', name: 'app_create')]
    //Request:because I work with Forms 
    public function create(Request $request, ManagerRegistry $doctrine): Response 
    {
        // dd($request);
        $event = new Events(); //create an empty obj from events
        $form = $this->createForm(EventsType::class, $event ); //which form are you talking about? eventType which is a class. which obj do you wanna create from that form? $event

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            // create a variable to bring the current date
            $now = new \DateTime("now");

            // $event obj which is empty, is taking the value from the input. so you dont need to set anything
            $event = $form->getData();

            $event->setCreateDate($now);

            // run the query
            // it is needed when i wanna tell doctrine to save the information and then run it
            $em = $doctrine->getManager();

            //we tell doctrine that now i have event obj that have a value.take a look and save it in doctrine
            $em->persist($event);

            //doctrine run the query. now the query is created and triggred. now i have a record in DB
            $em->flush();

            //the success message(if the code works fine, what i can return as a message)
            //see index.html.twig ({% for message in app.flashes('success') %})
            $this->addFlash("success", "Event has been added");

             //redirect the user to the main page ('/')(use the name of the route not the value)
             return $this->redirectToRoute("app_event");
        }
        return $this->render('event/create.html.twig', [
            //now i have to tell the twig that i create the form that you need to show. create a view for the form to show it in the twig
            "form" => $form->createView(),
        ]);
    }



    #[Route('/edit/{id}', name: 'app_edit')]
    public function edit($id): Response
    {
        return $this->render('event/edit.html.twig', [
            
        ]);
    }

    #[Route('/details/{id}', name: 'app_details')]
    public function details($id): Response
    {
        return $this->render('event/details.html.twig', [
            
        ]);
    }



}
