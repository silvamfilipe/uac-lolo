<?php

/**
 * Created by PhpStorm.
 * User: fsilva
 * Date: 27-09-2018
 * Time: 9:51
 */

namespace App\Controller;


use App\Services\TotolotoService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Totoloto
{
    /**
     * @var TotolotoService
     */
    private $service;

    /**
     * Totoloto constructor.
     * @param TotolotoService $service
     */
    public function __construct(TotolotoService $service)
    {
        $this->service = $service;
    }

    /**
     * @Route("/totoloto")
     */
    public function numbers(): Response
    {
        $numbers = $this->service->numbers();
        $list = [];
        foreach ($numbers as $number) {
            $list[] = "<li>{$number}</li>";
        }
        $allNumber = implode('', $list);
        return new Response(
            "<h2>Totoloto</h2>
                <ul>
                {$allNumber}
            </ul>"
        );
    }
}