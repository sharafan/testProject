<?php

namespace Admin\Project1\Controllers;

class DefaultController
{
    private DuckController $duck;

    public function __construct()
    {
        $this->duck = new DuckController();
    }

    public function hello(): void
    {
        echo "Hello duck " . PHP_EOL;
        echo $this->duck->hello();
    }
}