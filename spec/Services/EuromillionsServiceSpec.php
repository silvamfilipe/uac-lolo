<?php

namespace spec\App\Services;

use App\Services\EuromillionsService;
use App\Services\LotteryService;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EuromillionsServiceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(EuromillionsService::class);
    }

    function its_a_lottery_service()
    {
        $this->shouldHaveType(LotteryService::class);
    }

    function it_can_have_a_list_of_stars()
    {
        $stars = $this->stars();
        $stars->shouldBeArray();
        $stars->shouldHaveCount(2);
    }
}
