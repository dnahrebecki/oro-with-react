<?php

namespace Webinar\Bundle\ReactBundle\Controller\Frontend;

use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReactController extends AbstractController
{
    /**
     * @Route("/", name="orolab_react_index")
     * @Layout()
     *
     * @return array
     */
    public function indexAction()
    {
        return [];
    }
}
