<?php

namespace App\Controller;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{

    #[Route('/blog', name: 'blog_list')]
    public function list(): Response
    {
        // ...
    }
}