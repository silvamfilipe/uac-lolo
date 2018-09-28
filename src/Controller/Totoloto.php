<?php

/**
 * Created by PhpStorm.
 * User: fsilva
 * Date: 27-09-2018
 * Time: 9:51
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Totoloto
{

    /**
     * @Route("/totoloto")
     */
    public function numbers(): Response
    {

        return new Response(
            "<h2>Totoloto</h2>
                <ul>
                <li>23</li>
            </ul>"
        );
    }
}