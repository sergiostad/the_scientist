<?php

declare(strict_types=1);

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
     *
     * @param string $title
     *
     * @throws TitleToShort
     */
    public function __construct(string $title)
    {
        if (\mb_strlen($title) < 10) {
            throw new TitleToShort('Title to short');
        }
        $this->title = $title;
    }

    public function isEqual(self $title): bool
    {
        return (string) $title === $this->__toString();
    }

    public function __toString()
    {
        return $this->title;
    }
}
