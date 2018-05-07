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

class AdminController extends Controller
{

    /**
     * @return Response
     * @Route(
     *     "/admin/home",
     *     name="admin_homepage"
     * )
     */
    public function homeAction()
    {
        return $this->render('admin/default/homepage.html.twig');
    }

    /**
     * @return Response
     * @Route(
     *     "/admin/posts",
     *     name="admin_post_list"
     * )
     */
    public function listPostsAction()
    {
        return $this->render('admin/post/list.html.twig');
    }

    /**
     * @return Response
     * @Route(
     *     "/admin/posts/show",
     *     name="post_show"
     * )
     */
    public function showPostAction()
    {
        return $this->render('post/show.html.twig');
    }

    /**
     * @return Response
     * @Route(
     *     "/admin/artists",
     *     name="admin_artist_list"
     * )
     */
    public function listArtistAction()
    {
        return $this->render('admin/artist/list.html.twig');
    }

    /**
     * @return Response
     * @Route(
     *     "/admin/books",
     *     name="admin_book_list"
     * )
     */
    public function listConsultAction()
    {
        return $this->render('admin/book/list.html.twig');
    }

    /**
     * @return Response
     * @Route(
     *     "/admin/books/show",
     *     name="book_show"
     * )
     */
    public function showConsultAction()
    {
        return $this->render('book/show.html.twig');
    }
}