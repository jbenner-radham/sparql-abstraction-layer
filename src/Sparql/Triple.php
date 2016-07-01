<?php

namespace RadHam\Sparql;

class Triple
{
    public $subject;

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
