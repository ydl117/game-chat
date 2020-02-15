<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AdminController
 * @package App\Controller\Admin
 * @Route("/admin")
 */
class AdminController extends AbstractController
{

    /**
     * @Route("/ajout_jeux")
     */
    public function ajout_jeux(){
        return $this->render('admin/ajout_jeux.html.twig');
    }
}
