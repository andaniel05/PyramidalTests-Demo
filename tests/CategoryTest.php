<?php

namespace Andaniel05\PyramidalTests\Demo\Tests;

use PHPUnit\Framework\TestCase;
use Andaniel05\PyramidalTests\Demo\Category;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class CategoryTest extends TestCase
{
    public function testByDefaultHasANamePrefixedWithTheCategoryWord()
    {
        $category = new Category;
        $name = $category->getName();

        $this->assertStringStartsWith('category', $name);
        $this->assertEquals($name, $category->getName());
    }

    public function testTheNameArgumentSetsTheName()
    {
        $name = uniqid();
        $category = new Category($name);

        $this->assertEquals($name, $category->getName());
    }
}
