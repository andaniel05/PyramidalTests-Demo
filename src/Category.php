<?php

namespace Andaniel05\PyramidalTests\Demo;

class Category
{
    protected $name;

    public function __construct(string $name = null)
    {
        $this->name = $name ?? uniqid('category');
    }

    public function getName(): string
    {
        return $this->name;
    }
}
