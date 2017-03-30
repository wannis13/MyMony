<?php

namespace MMH\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MMH\SiteBundle\Entity\Comment;
use MMH\SiteBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;



class ProjetsController extends Controller
{
  public function indexAction()
  {
    $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Project');


    $project = $repo->getProjectWithPayment();

    $projectSlider = $repo->getProjectForSlider();

    return $this->render('MMHSiteBundle:Home:home.html.twig', ['project'=>$project, 'projectSlider' => $projectSlider]);
  }


    public function decouvrirAction($categorie)
    {
      $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Project');

      // Get every project & every category
      if($categorie == 'generale') {
        $project = $repo->getProjectWithPayment();
        // Get project which are not over
      } elseif($categorie == 0) {
        $project = $repo->findBy(
          array('status' => 1 )
        );
        // Get projects according to category
      }  else {
        $project = $repo->findBy(
          array('category' => $categorie)
        );
      }


      return $this->render('MMHSiteBundle:Projet:decouvrir.html.twig', ['project'=>$project]);
    }


  public function projetAction($slug, Request $request)
  {
    $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Project');
    $project = $repo->getProjectWithImage($slug);

    $comment = new Comment;
    $form = $this->createForm(CommentType::class, $comment);

    if ($request->isMethod('POST')) {
          // Refill the fields in case the form is not valid.
          $form->handleRequest($request);

          if($form->isValid()){
            $comment->setProject($project[0]);
            $route = $request->get('_route');
            $url = $request->getUri();
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->redirect($url);
          }
      }

    return $this->render('MMHSiteBundle:Projet:projet.html.twig',['project'=>$project, 'form'=>$form->createView()]);

  }
}
