<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookController extends AbstractController
{
    /**
     * @Route("/books")
     */
public function books()
{
    $books = [
        ['title' => 'titre 1',
            'author' => [
                'firstname' => 'John',
                'lastname' => 'Doe'
            ],
            'available' => true
        ],

        ['title' => 'titre 2',
            'author' => [
                'firstname' => 'John',
                'lastname' => 'Doe'
            ],
            'available' => false
        ]
    ];
    return $this->render('book/books.html.twig', [
            'books' => $books
        ]

    );
}


}