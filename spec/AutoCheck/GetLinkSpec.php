<?php

namespace spec\AutoCheck;

use AutoCheck\GetLink;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use AutoCheck\Account;

class GetLinkSpec extends ObjectBehavior
{
    function let(Account $account)
    {
        $this->beConstructedWith($account);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('AutoCheck\GetLink');
    }

}
