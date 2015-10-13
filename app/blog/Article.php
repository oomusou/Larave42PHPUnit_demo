<?php
/**
 * Created by PhpStorm.
 * User: oomusou
 * Date: 10/13/15
 * Time: 10:36 PM
 */

namespace App\Blog;


class Article
{
    private $name;


    /**
     * Article constructor.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        return 'Hello ' . $this->name;
    }
}