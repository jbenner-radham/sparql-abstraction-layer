<?php

namespace spec\RadHam\Sparql;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TripleSpec extends ObjectBehavior
{
    function let() {
        $this->beConstructedWith([
            'subject'   => '?x',
            'predicate' => 'rdfs:label',
            'object'    => '"Hello World"@en'
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

    function it_should_have_an_object_of_a_hello_world_english_string() {
        // We can't do the following due to phpSpec voodoo.
        // `$this->object->shouldBe('"Hello World"@en');`
        assert($this->getWrappedObject()->object === '"Hello World"@en');
    }
}
