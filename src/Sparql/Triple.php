<?php

namespace RadHam\Sparql;

class Triple
{
    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $predicate;

    /**
     * @var string
     */
    public $object;

    public function __construct(array $parameters) {
        try {
            $this->subject   = $parameters['subject'];
            $this->predicate = $parameters['predicate'];
            $this->object    = $parameters['object'];
        } catch (Exception $e) {
            // ...
        }
    }
}
