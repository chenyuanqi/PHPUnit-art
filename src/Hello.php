<?php

/**
 * Class Hello. for PHPUnit Test
 */
class Hello {
    /**
     * @var string
     */
    protected $owner = 'vikey';

    /**
     * Hello constructor.
     * @param string $owner
     */
    public function __construct ( $owner )
    {
        $this->owner = $owner;
    }

    /**
     * sayHello. To everyone who you want
     * @return string
     */
    public function sayHello ()
    {
        return "Hello, ".$this->owner;
    }
}


