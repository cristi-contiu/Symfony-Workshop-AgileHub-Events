<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventsController extends AbstractController
{
    /**
     * @Route("/events", name="events_index")
     *
     * @return Response
     * @throws \Exception
     */
    public function index(Request $request)
    {
        $events = [];
        foreach (range(1, 6) as $index) {
            $events[] = [
                'id' => $index,
                'title' => "Introducere in $index",
                'slug' => "introducere-in-$index",
                'date' => new \DateTime('2018-12-02 11:00'),
                'image' => 'https://agilehub.ro/wp-content/uploads/2015/11/Seara-Prezentărilor-AgileHub-Git-și-Gerrit-3-e1478464465849.jpg',
                'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum placerat elit, vel elementum ex.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum placerat elit, vel elementum ex.',
            ];
        }

        return $this->render('events/index.html.twig', [
            'events' => $events
        ]);
    }

    /**
     * @Route("/events/{id}", name="events_view")
     *
     * @return Response
     * @throws \Exception
     */
    public function view(Request $request, $id)
    {
        $event = [
            'id' => 1,
            'title' => "Introducere in 1",
            'slug' => "introducere-in-1",
            'date' => new \DateTime('2018-12-02 11:00'),
            'image' => 'https://agilehub.ro/wp-content/uploads/2015/11/Seara-Prezentărilor-AgileHub-Git-și-Gerrit-3-e1478464465849.jpg',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum placerat elit, vel elementum ex.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum placerat elit, vel elementum ex.',
        ];

        return $this->render('events/view.html.twig', [
            'event' => $event
        ]);
    }
}