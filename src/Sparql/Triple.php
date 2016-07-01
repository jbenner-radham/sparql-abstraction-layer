<?php

namespace RadHam\Sparql;

class Triple
{
    public $subject;

    public function __construct(array $parameters) {
        try {
            $this->subject = $parameters['subject'];
        } catch (Exception $e) {
            // ...
        }
    }
}
