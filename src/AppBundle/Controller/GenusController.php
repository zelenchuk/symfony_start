<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 18.04.2016
 * Time: 4:19
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class GenusController
{
    /**
     * @Route("/genus")
     */
    public function show_action(){
        return new Response('Under the sea');
    }
}