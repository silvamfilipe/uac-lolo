<?php

namespace App\Services;

class TotolotoService
{
    /**
     * @return int
     * @throws \Exception
     */
    public function number()
    {
        return random_int(1, 49);
    }

    public function numbers(int $betSize = 6): array
    {
        if ($betSize < 5) {
            throw new \InvalidArgumentException(
                "A bet can only be at least 5 numbers."
            );
        }

        $bet = [];
        for ($i = 0; $i < $betSize; $i++) {

            do {
                $number = $this->number();
            } while (in_array($number, $bet));

            array_push($bet, $number);
        }
        sort($bet);
        return $bet;
    }
}
