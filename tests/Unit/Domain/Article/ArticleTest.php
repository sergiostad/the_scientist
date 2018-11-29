<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article;

use DateTimeImmutable;
use LaravelDay\Article\Article;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateArticle()
    {
        $id = 1;
        $title = 'Questo è un titolo';
        $body = 'Questo è un body';
        $creationDate = new DateTimeImmutable();

        $article = new Article($id, $title, $body, $creationDate);

        $this->assertSame($id, $article->getId());
        $this->assertSame($title, $article->getTitle());
        $this->assertSame($body, $article->getBody());
        $this->assertSame($creationDate, $article->getCreationDate());
    }
}
