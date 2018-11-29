<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article;

use DateTimeImmutable;
use LaravelDay\Article\Article;
use LaravelDay\Article\ValueObject\Body;
use LaravelDay\Article\ValueObject\ID;
use LaravelDay\Article\ValueObject\Title;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateArticle()
    {
        $id = new ID(1);
        $title = new Title('Questo è un titolo');
        $body = new Body('Questo è un body');
        $creationDate = new DateTimeImmutable();

        $article = new Article($id, $title, $body, $creationDate);

        $this->assertSame($id, $article->getId());
        $this->assertSame($title, $article->getTitle());
        $this->assertSame($body, $article->getBody());
        $this->assertSame($creationDate, $article->getCreationDate());
    }
}
