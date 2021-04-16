<?php
<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MesEntity\Post;

class PostController extends AbstractController
{
    public $mesPosts;

    public function __construct()
    {
        this->mesPosts =
        [
            new Post(id: 1, userId:1, title"Hello PHP", body "On fait du Symfony"),
            new Post(id: 2, userId: 1 , title"Hello C#",body "On fait du C#"),
            new Post(id:3, userId: 1 , title"Hello JS",body "On fait du JS"),
            new Post(id:4, userId:1 , title"Hello", body"On fait du CodeCombat"),
        ];

    }
    /**
     * @Route("/post", name="post")
     */
    public function index(): Response
    {
        $array =
        [
            "Raphael",
            "Robin",
            "Antoine",
            "Nicolas",
            "Tom"
        ];

        


        return $this->render('post/index.html.twig',
        [
            'controller_name' => 'PostController',
            'personnes' => $array,
            'mesPosts' => $mesPosts
        ]);
    }
}

?>



?>