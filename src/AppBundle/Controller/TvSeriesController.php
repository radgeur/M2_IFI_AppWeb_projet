<?php
/**
 * Created by PhpStorm.
 * User: Nathanael
 * Date: 10/01/2017
 * Time: 16:56
 */

namespace AppBundle\Controller;

use AppBundle\Entity\TVSeries;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class TvSeriesController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route(name="homepage_index", path="/")
     */
    public function listAction(){
        $s1 = new TVSeries();
        $s1->setId("id1");
        $s1->setAuthor("Author 1");
        $s1->setName("Title 1");

        $s2 = new TVSeries();
        $s2->setId("id2");
        $s2->setAuthor("Author 2");
        $s2->setName("Title 2");

        $series=[
            $s1,
            $s2];

        return $this->render("tvseries/index.html.twig", ['series' => $series]);
    }


    /**
     * @param Request $request
     * @Route("/series/create")
     */
    public function createSeriesAction(Request $request){
        $s = new TVSeries();
        $s->setAuthor($request->get('author'));
        $s->setName($request->get('name'));
        $s->setDescription($request->get('description'));

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($s);
        $manager->flush();

        return new Response("OK");

    }



}