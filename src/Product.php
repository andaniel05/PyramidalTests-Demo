<?php

namespace Andaniel05\PyramidalTests\Demo;

class Product
{
    protected $code;
    protected $categories = [];

    public function __construct()
    {
        $this->code = uniqid();
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function addCategory(Category $category): void
    {
        $this->categories[] = $category;
    }
}
