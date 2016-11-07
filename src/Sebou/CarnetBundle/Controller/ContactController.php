<?php

	namespace Sebou\CarnetBundle\Controller;

	use Sebou\CarnetBundle\Entity\Contact;
	use Sebou\UserBundle\Entity\User;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
	use Symfony\Component\Form\Extension\Core\Type\DateType;
	use Symfony\Component\Form\Extension\Core\Type\FormType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;
	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\Extension\Core\Type\EmailType;
	use Symfony\Component\Form\Extension\Core\Type\UrlType;

	class ContactController extends Controller
	{
		public function accueilAction()
		{
			$content = $this->get('templating')->render('SebouCarnetBundle:Contact:accueil.html.twig');

			return new Response($content);
		}

		public function viewAction(){
			$repository = $this->getDoctrine()->getManager()->getRepository('Sebou\CarnetBundle\Entity\Contact');
			$listContact = $repository->findByUser($this->getUser());
			return $this->get('templating')->renderResponse('SebouCarnetBundle:contact:listContact.html.twig',array('listContact'=>$listContact));
		}

		public function detailAction($id){
			$repository = $this->getDoctrine()->getManager()->getRepository('Sebou\CarnetBundle\Entity\Contact');
			$contact = $repository->find($id);
			return $this->get('templating')->renderResponse('SebouCarnetBundle:contact:DetailContact.html.twig',array('contact'=>$contact));
		}

		public function suppAction($id){
			$repository = $this->getDoctrine()->getManager();
			$contact = $repository->getRepository('Sebou\CarnetBundle\Entity\Contact')->find($id);
			$repository->remove($contact);
			$repository->flush();
			$content = $this->get('templating')->render('SebouCarnetBundle:contact:supp.html.twig');

			return new Response($content);

		}

		public function editAction($id, Request $request){
			$repository = $this->getDoctrine()->getManager()->getRepository('Sebou\CarnetBundle\Entity\Contact');
			$contact = $repository->find($id);
			$form = $this->get('form.factory')->createBuilder(FormType::class, $contact)
				->add('nom', TextType::class, array('data' => $contact->getNom()))
				->add('prenom', TextType::class, array('required' => false, 'data' => $contact->getPrenom()))
				->add('email', EmailType::class, array('required' => false, 'data' => $contact->getEmail()))
				->add('telephone', TextType::class, array('required' => false, 'data' => $contact->getTelephone()))
				->add('adresse', TextType::class, array('required' => false, 'data' => $contact->getAdresse()))
				->add('siteWeb', URLType::class, array('required' => false, 'data' => $contact->getSiteWeb()))
				->add('Ajouter', SubmitType::class)
				->getForm()
			;

			// Si la requête est en POST
			if ($request->isMethod('POST')) {
				// On fait le lien Requête <-> Formulaire
				// À partir de maintenant, la variable $contact contient les valeurs entrées dans le formulaire par le visiteur
				$form->handleRequest($request);

				// On vérifie que les valeurs entrées sont correctes
				if ($form->isValid()) {
					// On enregistre notre objet $contact dans la base de données, par exemple
					$em = $this->getDoctrine()->getManager();
					$em->persist($contact);
					$em->flush();

				}
			}

			return $this->render('SebouCarnetBundle:contact:edit.html.twig', array(
			'form' => $form->createView(),
			));
		}

		public function addAction(Request $request)
		{
			$contact = new Contact();
			$contact->setUser($this->getUser());
			$form = $this->get('form.factory')->createBuilder(FormType::class, $contact)
				->add('nom', TextType::class)
				->add('prenom', TextType::class, array('required' => false))
				->add('email', EmailType::class, array('required' => false))
				->add('telephone', TextType::class, array('required' => false))
				->add('adresse', TextType::class, array('required' => false))
				->add('siteWeb', URLType::class, array('required' => false))
				->add('Ajouter', SubmitType::class)
				->getForm()
			;


			// Si la requête est en POST
    if ($request->isMethod('POST')) {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $contact contient les valeurs entrées dans le formulaire par le visiteur
      $form->handleRequest($request);

      // On vérifie que les valeurs entrées sont correctes
      if ($form->isValid()) {
        // On enregistre notre objet $contact dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();

      }
    }

			return $this->render('SebouCarnetBundle:contact:index.html.twig', array(
      'form' => $form->createView(),
			));
		}
	}
?>
