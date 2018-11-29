<?php

declare(strict_types=1);

namespace LaravelDay\Article\UseCase\ListArticles;

class ListArticles
{
    /*
     * ListArticles invoke
     */
    public function __invoke()
    {
        return [
            [
                'title' => 'Articolo 1',
                'body' => 'Questo è un articolo',
                'creationDate' => '2018-11-29 00:00:00',
            ],
        ];
    }
}
