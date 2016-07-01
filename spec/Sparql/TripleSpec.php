<?php

namespace spec\RadHam\Sparql;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TripleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RadHam\Sparql\Triple');
    }
}
