<?php
/**
 * This file is part of the coisa/composer-skeleton
 *
 * Defines an example class with simple, dummy and useless tests
 *
 * @copyright Copyright (c) Felipe Sayão Lobato Abreu <contato@felipeabreu.com.br>
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link https://packagist.org/packages/coisa/composer-skeleton Packagist
 * @link https://github.com/coisa/composer-skeleton GitHub
 */
namespace Test;

use PHPUnit\Framework\TestCase;

/**
 * Class DummyTest
 * @package Test
 */
class DummyTest extends TestCase
{
    /**
     * Test if true is really true (duh!)
     */
    public function testAlwaysTrue()
    {
        $this->assertTrue(true);
    }
}