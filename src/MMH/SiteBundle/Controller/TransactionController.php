<?php

namespace MMH\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TransactionController extends Controller
{
  public function inscriptionAction () {
    return new Response ('Vous voici sur la page d\'inscription');
  }

  public function connexionAction () {
    return $this->render('MMHSiteBundle:Connexion:connexion.html.twig');
}
  public function financementAction ($slug) {
    $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Project');

    $project = $repo->getProjectWithImage($slug);

    return $this->render('MMHSiteBundle:Paiement:paiement.html.twig', ['project'=>$project]);
  }

  public function membreAction ($membre) {
    return new Response ('Vous voici sur le profil d\'un membre');
  }

}
