<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 27/06/2016
 * Time: 11:08
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AppController
{
    /**
     * @Route("/app")
     */
    public function showAction()
    {
        return new Response('Under the sea');
    }
}