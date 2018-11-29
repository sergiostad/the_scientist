<?php

namespace Tests\Unit\Domain\Article\valueObject;


use LaravelDay\Article\ValueObject\Title;
use Tests\TestCase;

class TitleTest extends TestCase
{
    /**
     * @test
     * @throws \LaravelDay\Article\TitleToShort
     */
    public function shouldCreateTitle()
    {
        $expectedTitle = 'This is valid title';

        $title = new Title($expectedTitle);

        $this->assertEquals($expectedTitle, (string)$title);
}
}