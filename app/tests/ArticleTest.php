<?php

use App\Blog\Article;

class ArticleTest extends TestCase
{
    public function testHello()
    {
        // arrange
        $_ = new Article('Sam');
        $expected = 'Hello Sam';

        // act
        $actual = $_->hello();

        // assert
        $this->assertEquals($expected, $actual);
    }
}
