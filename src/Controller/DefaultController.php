<?php
namespace App\Controller;

use App\Entity\Post;
use FM\ElfinderBundle\Form\Type\ElFinderType;
use Hillrange\CKEditor\Form\CKEditorType;
use Hillrange\CKEditor\Util\JSONBuilder;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

    /**
     * @Route("/upload", name="upload_img")
     */
    public function uploadAction(Request $request)
    {
        // Get file
        $file = $request->files->get('upload');

        // Move file
        if($file instanceof UploadedFile) {
            $file = $file->move('/var/www/html/public/uploads/media', $file->getClientOriginalName());
        }

        // Prepare Response
        $resp = [
            'uploaded' => 1,
            'fileName' => $file->getFilename(),
            'url' => '/uploads/media/' . $file->getFilename()
        ];

        // Init Serializer
        $serializer = (new SerializerBuilder())->build();

        return new Response($serializer->serialize($resp, 'json'));
    }

    /**
     * @return Response
     * @Route(
     *     "/posts",
     *     name="post_list"
     * )
     */
    public function listPostsAction()
    {
        return $this->render('post/list.html.twig');
    }

    /**
     * @return Response
     * @Route(
     *     "/artists",
     *     name="artist_list"
     * )
     */
    public function listArtistAction()
    {
        return $this->render('artist/list.html.twig');
    }

    /**
     * @return Response
     * @Route(
     *     "/books",
     *     name="book_list"
     * )
     */
    public function listConsultAction()
    {
        return $this->render('book/list.html.twig');
    }
}