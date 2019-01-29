<?php

setTestCaseNamespace('Andaniel05\PyramidalTests\Demo\Tests');
setTestCaseClass('PHPUnit\Framework\TestCase');

use Andaniel05\PyramidalTests\Demo\Product;
use Andaniel05\PyramidalTests\Demo\Category;

testCase('create a product', function () {
    setUp(function () {
        $this->product = new Product;
    });

    test('by default the product has a code', function () {
        $this->assertNotEmpty($this->product->getCode());
    });

    test('by default the product not contains categories', function () {
        $this->assertCount(0, $this->product->getCategories());
    });

    testCase('the product adds a category', function () {
        setUp(function () {
            $this->category = new Category;
            $this->product->addCategory($this->category);
        });

        test('the product contains the category', function () {
            $this->assertContains($this->category, $this->product->getCategories());
        });
    });
});
