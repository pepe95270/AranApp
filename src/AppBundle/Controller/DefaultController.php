<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use APY\DataGridBundle\Grid\Source\Entity;

class DefaultController extends Controller
{
    /**
     * @Route("/recherchesansdispo")
     */
    public function gridAction()
    {
        $source = new Entity('AppBundle:User', 'sansdispo');

        /* @var $grid \APY\DataGridBundle\Grid\Grid */
        $grid = $this->get('grid');

        $grid->setSource($source);

        return $grid->getGridResponse('AppBundle::grid.html.twig');
    }
}