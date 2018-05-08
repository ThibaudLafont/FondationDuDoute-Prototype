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
     *     "/admin/posts/form",
     *     name="post_form"
     * )
     */
    public function formPostAction()
    {
        return $this->render('admin/post/form.html.twig');
    }

    /**
     * @return Response
     * @Route(
     *     "/admin/posts/edit",
     *     name="post_form_edit"
     * )
     */
    public function editFormPostAction()
    {
        return $this->render('admin/post/edit.form.html.twig');
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
     *     "/admin/books/add",
     *     name="book_add"
     * )
     */
    public function addConsultAction()
    {
        return $this->render('admin/book/add.html.twig');
    }

    /**
     * @return Response
     * @Route(
     *     "/admin/books/edit",
     *     name="book_edit"
     * )
     */
    public function editConsultAction()
    {
        return $this->render('admin/book/edit.html.twig');
    }
}