<?php

namespace App\Services;

class TotolotoService extends LotteryService
{

    public function numbers(int $betSize = 6)
    {
        return $this->generateNumbers($betSize, 49);
    }
}
