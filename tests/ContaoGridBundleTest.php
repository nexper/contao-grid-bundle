<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Nexper\ContaoGridBundle\Tests;

use Nexper\ContaoGridBundle\ContaoGridBundle;
use PHPUnit\Framework\TestCase;

class ContaoGridBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoGridBundle();

        $this->assertInstanceOf('Nexper\ContaoGridBundle\ContaoGridBundle', $bundle);
    }
}
