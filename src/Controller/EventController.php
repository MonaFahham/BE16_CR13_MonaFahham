<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Events;
Use App\Form\EventType; 

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


    #[Route('/create', name: 'app_create')]
    //Request:because I work with Forms 
    public function create(Request $request, ManagerRegistry $doctrine): Response 
    {
        // dd($request);
        $events = new Events(); //create an empty obj from events
        $form = $this->createForm(EventType::class, $events ); //which form are you talking about? eventType which is a class. which obj do you wanna create from that form? $event

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            // create a variable to bring the current date
            $now = new \DateTime("now");

            // $event obj which is empty, is taking the value from the input. so you dont need to set anything
            $events = $form->getData();

            // $events->setCreateDate($now);

            // run the query
            // it is needed when i wanna tell doctrine to save the information and then run it
            $em = $doctrine->getManager();

            //we tell doctrine that now i have event obj that have a value.take a look and save it in doctrine
            $em->persist($events);

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

        //here we keep the form and change a small part of it
        #[Route('/edit/{id}', name: 'app_edit')]
        public function edit(Request $request, ManagerRegistry $doctrine, $id): Response
        {
          
          $event = $doctrine->getRepository(Events::class)->find($id);
          $form = $this->createForm(EventType::class, $event);
          $form->handleRequest($request);
    
          if($form->isSubmitted() && $form->isValid()) {
            $event = $form->getData();
            $em = $doctrine->getManager();
            $em->persist($event);
            $em->flush();
            $this->addFlash(
              'notice', 'Event has been edited!'
            );
    
            return $this->redirectToRoute('app_event');
          } 
          return $this->render('event/edit.html.twig', ['form' => $form->createView()]);
        }
    

          #[Route('/details/{id}', name: 'app_details')]
          public function details($id, ManagerRegistry $doctrine): Response
          {
              $events = $doctrine->getRepository(Events::class)->find($id);
              return $this->render('event/details.html.twig', [
                  "events" => $events //key => array

              ]);
          }


          #[Route('/delete/{id}', name: 'app_delete')]
          public function delete($id, ManagerRegistry $doctrine): Response
          {
              $events = $doctrine->getRepository(Events::class)->find($id); //find the record that you wanna remove
              $em = $doctrine->getManager(); //create a variable using getManager
              $em->remove($events); // it tells the doctrine that this obj will be removed
              $em->flush(); //create the querya and triggred that
              $this->addFlash("success", "Event has been removed");
              return $this->redirectToRoute("app_event");
          }

          //Filter the events
          #[Route('/filter/{eventType}', name: 'app_filter')]
          public function filterTypes(ManagerRegistry $doctrine, $eventType): Response
          {
            $events = $doctrine->getRepository(Events::class)->findBy(['event_type' => $eventType]);
            return $this->render('event/filter.html.twig', [
                'events' => $events
            ]);
          }   
      
}
