<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        $celebrities = [
            [ 'name' => 'Norbert Dragonneau' , 'picture' =>'dragonneau.jpg' , 'comment' => 'Un des plus célèbres magizoologiste, auteur du livre <i>Vie et habitat des animaux fantastiques<i/>' ],
            [ 'name' => 'Harry Potter', 'comment' => 'Le nouveau né le plus célèbre au monde après le bébé royal...', 'picture' => 'hp1.jpg'],
            [ 'name' => 'Albus Dumbledore', 'picture' => 'dumbledore.jpg', 'comment' => 'Le plus célèbre directeur de notre école ainsi qu\'un des sorciers les plus puissant de notre époque'],
            [ 'name' => 'Gilderoy Lockhart', 'picture' => 'gilderoy.png', 'comment' => 'Eh mince on dirait que Peeves fait encore des siennes...'],
            [ 'name' => 'Tom Jedusor', 'picture' => 'voldemort.png', 'comment' => 'Une créme solaire  indice 50 achetée, une offerte']
        ];
        return $this->render('home/about.html.twig', [
            'celebrities' => $celebrities
        ]);
    }
}
