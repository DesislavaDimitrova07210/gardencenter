<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     * @param Request $request
     * @return Response
     */

    public function LoginAction(Request $request)
    {


        return new Response('<html><body><h1>Admin</body></html>');
        //return  $this->render('security/login_.html.twig');
    }
}
?>