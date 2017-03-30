<?php

namespace MMH\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MMH\SiteBundle\Entity\Contact;
use MMH\SiteBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;

class StaticController extends Controller
{

  private function sendEmail($data) {

    $userName = 'mailaddress';
    $password = 'password';

    $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
    ->setUsername($userName)
    ->setPassword($password);

    $mailer = \Swift_Mailer::newInstance($transport);
    $message = \Swift_Message::newInstance('Contact via le site MyMoneyHelp')
       ->setFrom(array($userName => 'Nouveau message de ' . $data->getName() . ' ' . $data->getFirstname()))
       ->setTo(array($userName => $userName))
       ->setBody($data->getMessage()."<br>ContactMail :".$data->getEmail(), 'text/html')
       ->setReplyTo(array($data->getEmail()));

    if ($data->getDocument()) {
      $message->attach(\Swift_Attachment::fromPath($data->getDocument())->setFilename($data->getDocument()-> getClientOriginalName()));
    }

    return $result = $mailer->send($message);

  }

  public function allArticle() {
    $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Article');
    $article = $repo->getArticleWithImage();
    return $article;
  }

  public function associationAction()
  {
      return $this->render('MMHStaticBundle:About:about.html.twig', ['article'=>$this->allArticle()]);
  }

  public function soutenirAction()
  {
      return $this->render('MMHStaticBundle:Support:support.html.twig', ['article'=>$this->allArticle()]);
  }

  public function contactAction(Request $request)
  {
      $contact = new Contact;

      $form = $this->createForm(ContactType::class, $contact);

      if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);

            if($form->isValid()){
                // Send mail
                if($this->sendEmail($form->getData())){

                  $this->get('session')->getFlashBag()->add('success','Votre message a bien été envoyé, nous répondrons au plus vite !');
                    // Everything OK, redirect to wherever you want !
                    return $this->redirectToRoute('mmh_static_contact');
                }
                else{
                    $this->get('session')->getFlashBag()->add('error','Une erreur est survenue merci de réessayer !');
                }
            }
        }

      return $this->render('MMHStaticBundle:Contact:contact.html.twig', ['article'=>$this->allArticle(), 'form'=>$form->createView()]);
  }

  public function deposerAction(Request $request)
  {
      $contact = new Contact;

      $form = $this->createForm(ContactType::class, $contact);

      if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);

            if($form->isValid()){
                // Send mail
                if($this->sendEmail($form->getData())){

                  $this->get('session')->getFlashBag()->add('success','Votre message a bien été envoyé, nous répondrons au plus vite !');
                    // Everything OK, redirect to wherever you want !
                    return $this->redirectToRoute('mmh_static_deposer');
                }
                else{
                    $this->get('session')->getFlashBag()->add('error','Une erreur est survenue merci de réessayer plus tard !');
                }
            }
        }


      return $this->render('MMHStaticBundle:Submit:submit.html.twig', ['article'=>$this->allArticle(), 'form'=>$form->createView()]);
  }

  public function mentionsAction()
  {
      return $this->render('MMHStaticBundle:Mention:mention.html.twig', ['article'=>$this->allArticle()]);
  }

  public function conditionsAction()
  {
      return $this->render('MMHStaticBundle:Conditions:conditions.html.twig', ['article'=>$this->allArticle()]);
  }

  public function blogAction($slug)
  {
      $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Article');
      $articleAlone = $repo->getArticleWithAuthor($slug);

      return $this->render('MMHStaticBundle:Blog:blog.html.twig', ['article'=>$this->allArticle(), 'articleAlone'=>$articleAlone]);
  }
}
