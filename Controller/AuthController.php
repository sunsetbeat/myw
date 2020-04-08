<?php

namespace Sunsetbeat\Myw\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{
    /**
     * @Route("/myw/auth", name="myw_auth")
     */
    public function index()
    {
        echo "<pre>"; var_dump(__LINE__); exit;
    }
}
