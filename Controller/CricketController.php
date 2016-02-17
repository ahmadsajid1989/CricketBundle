<?php

namespace Bbd\BongoCricketBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bbd\BongoCricketBundle\Form\CricketType;

/**
 * Cricket controller.
 *
 */
class CricketController extends Controller
{

    public function indexAction()
    {
        //$em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('BbdBongoCricketBundle:Team')->findAll();
        //echo "dd";
        //die();

        //$pusher = new Pusher( $app_key, $app_secret, $app_id );
        //$pusher = new Pusher( $app_key, $app_secret, $app_id, array( 'encrypted' => true ) );

        $form = $this->createForm(new CricketType());

        return $this->render('BbdBongoCricketBundle:Cricket:index.html.twig', array(
            'form'   => $form->createView(),
        ));

        //return $this->render('BbdBongoCricketBundle:Cricket:index.html.twig');
        /*return $this->render('BbdBongoCricketBundle:Team:index.html.twig', array(
            'entities' => $entities,
        ));
        */
    }
    //triggerPusherAction
    public function triggerPusherAction()
    {
        //echo "rtrt"; die();
        /** @var \Pusher $pusher */
        $pusher = $this->container->get('lopi_pusher.pusher');
        $data['message'] = 'Hello Ashik';

        //$arr="";
        $pusher->trigger('test_channel', 'my_event', $data);
        //echo "<pre>";
        //print_r($arr);
        //echo "</pre>";

        //die();
        return $this->render('BbdBongoCricketBundle:Pusher:trigger.html.twig', array(
            'response'   => '',
        ));
    }

    public function resultPusherAction()
    {
        return $this->render('BbdBongoCricketBundle:Pusher:index.html.twig', array(
            'response'   => '',
        ));
    }

}
