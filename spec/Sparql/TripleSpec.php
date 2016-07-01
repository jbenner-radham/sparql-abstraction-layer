<?php

namespace spec\RadHam\Sparql;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TripleSpec extends ObjectBehavior
{
    function let() {
        $this->beConstructedWith([
            'subject'   => '?x',
            'predicate' => 'rdfs:label'
        ]);
    }

    function it_is_initializable() {
        $this->shouldHaveType('RadHam\Sparql\Triple');
    }

    function it_should_have_a_subject_of_question_mark_x() {
        $this->subject->shouldBe('?x');
    }

    function it_should_have_a_predicate_of_rdfs_colon_label() {
        $this->predicate->shouldBe('rdfs:label');
    }
}
