<?php

declare(strict_types=1);

namespace LaravelDay\Article;

use LaravelDay\Article\ValueObject\Body;
use LaravelDay\Article\ValueObject\ID;
use LaravelDay\Article\ValueObject\Title;

final class Article
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;
    /**
     * @var \DateTime
     */
    private $creationDate;
    /**
     * @var int
     */
    private $id;

    /**
     * Article constructor.
     *
     * @param int       $id
     * @param string    $title
     * @param string    $body
     * @param \DateTime $creationDate
     */
    public function __construct(ID $id, Title $title, Body $body, \DateTimeImmutable $creationDate)
    {
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): ID
    {
        return $this->id;
    }

    /**
     * @return Body
     */
    public function getBody(): Body
    {
        return $this->body;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate(): \DateTimeImmutable
    {
        return $this->creationDate;
    }

    /**
     * @return Title
     */
    public function getTitle(): Title
    {
        return $this->title;
    }
}
