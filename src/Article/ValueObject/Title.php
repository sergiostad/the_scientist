<?php

namespace LaravelDay\Article\ValueObject;


use LaravelDay\Article\ValueObject\Exception\TitleToShort;

final class Title
{
    /**
     * @var string
     */
    private $title;

    /**
     * Title constructor.
     * @param string $title
     * @throws TitleToShort
     */
    public function __construct(string $title)
    {
        if (\strlen($title) < 10) {
            throw new TitleToShort('Title to short');
        }
        $this->title = $title;
    }

    public function isEqual(Title $title): bool
    {
        return (string)$title === $this->__toString();
    }

    public function __toString()
    {
        return $this->title;
    }
}