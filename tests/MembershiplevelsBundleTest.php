<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace LocalbrandingDe\MembershiplevelsBundle\Tests;

use LocalbrandingDe\MembershiplevelsBundle\MembershiplevelsBundle;
use PHPUnit\Framework\TestCase;

class MembershiplevelsBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new MembershiplevelsBundle();

        $this->assertInstanceOf('Localbranding-de\MembershiplevelsBundle\MembershiplevelsBundle', $bundle);
    }
}
