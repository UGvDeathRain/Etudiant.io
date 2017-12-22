<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EtudiantController extends Controller
{
    /**
     * @Route("/etudiant", name="etudiant")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $etudiants = $em->getRepository("App:Etudiant")->findAll();

        dump($etudiants);
        return $this->render("listeEtudiants.html.twig", [
            'listeEtudiant' => $etudiants
        ]);
    }
}
