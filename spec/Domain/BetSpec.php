<?php

namespace spec\App\Domain;

use App\Domain\Bet;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BetSpec extends ObjectBehavior
{
    private $numbers;

    private $stars;

    function let()
    {
        $this->numbers = [2, 34, 26, 12, 6];
        $this->stars = [2, 5];

        $this->beConstructedWith($this->numbers, $this->stars);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Bet::class);
    }

    function it_has_a_list_of_5_numbers()
    {
        $this->numbers()->shouldBe($this->numbers);
    }

    function it_has_a_list_of_2_stars()
    {
        $this->stars()->shouldBe($this->stars);
    }
}
