<?php

namespace App\Domain;

class Bet
{
    /**
     * @var array
     */
    private $numbers;

    /**
     * @var array
     */
    private $stars;

    public function __construct(array $numbers, array $stars)
    {
        $this->numbers = $numbers;
        $this->stars = $stars;
    }

    public function numbers(): array
    {
        return $this->numbers;
    }

    /**
     * 2 numbers called stars
     *
     * @return array
     */
    public function stars(): array
    {
        return $this->stars;
    }
}
