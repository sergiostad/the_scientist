<?php

namespace LaravelDay\Article\ValueObject;


class Body
{
    /**
     * @var string
     */
    private $body;

    /**
     * Body constructor.
     * @param string $body
     */
    public function __construct(string $body)
    {
        if (strlen($body) < 10) {
            throw new BodyToShort('Title to short');
        }
        $this->body = $body;
    }

    public function isEqual(Body $body): bool
    {
        return (string)$body === $this->__toString();
    }

    public function __toString()
    {
        return $this->body;
    }
}