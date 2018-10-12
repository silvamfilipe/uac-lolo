<?php

namespace App\Services;

class EuromillionsService extends LotteryService
{
    protected function limit(): int
    {
        return 50;
    }

    public function stars()
    {
        return [0, 0];
    }
}
