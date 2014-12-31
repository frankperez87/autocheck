<?php

namespace spec\AutoCheck;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AccountSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('CID', 'PWD', 'SID');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('AutoCheck\Account');
    }

    function it_has_a_customer_id()
    {
        $this->getCustomerId()->shouldReturn('CID');
    }

    function it_has_a_password()
    {
        $this->getPassword()->shouldReturn('PWD');
    }

    function it_has_a_secondary_customer_id()
    {
        $this->getSecondaryCustomerId()->shouldReturn('SID');
    }

    function it_can_set_the_report_language()
    {
        $this->setLanguage('ES');
        $this->getLanguage()->shouldReturn('ES');
    }
}
