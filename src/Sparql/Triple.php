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

    public function __construct(array $parameters) {
        try {
            $this->subject   = $parameters['subject'];
            $this->predicate = $parameters['predicate'];
        } catch (Exception $e) {
            // ...
        }
    }
}
