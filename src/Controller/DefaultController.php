<?php
namespace App\Controller;

use App\Entity\Post;
use Hillrange\CKEditor\Form\CKEditorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    /**
     * @Route("/form", name="form")
     */
    public function formAction()
    {

        $post = new Post();

        $form = $this->createFormBuilder($post)
            ->add('content', CKEditorType::class)
            ->getForm();

        return $this->render('index.html.twig', ['form' => $form->createView()]);

    }
}