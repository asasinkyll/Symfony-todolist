<?php
/**
 * Created by PhpStorm.
 * User: Dorinel
 * Date: 14.08.2017
 * Time: 19:45
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class HomeControler extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function defultAction(Request $request)
    {
        return $this->redirectToRoute('todo_list');
//        return $this->render('default/index.html.twig');
    }
}