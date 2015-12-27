<?php

/*
 * Copyright (C) 2016 Emanuele Minotto
 * This program is free software: you can redistribute it and/or modify it
 * under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, version 3.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Bisarca\Graph\Test;

use Bisarca\Graph\IdentifiableTrait;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \Bisarca\Graph\IdentifiableTrait
 */
class IdentifiableTraitTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var IdentifiableTrait
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = $this->getMockForTrait(IdentifiableTrait::class);
    }

    /**
     * @covers ::setIdentifier
     */
    public function testSetIdentifier()
    {
        $identifier = rand();

        $setterOutput = $this->object->setIdentifier($identifier);
        $this->assertInstanceOf(get_class($this->object), $setterOutput);
    }

    /**
     * @covers ::getIdentifier
     * @depends testSetIdentifier
     */
    public function testGetIdentifier()
    {
        $identifier = rand();
        $this->object->setIdentifier($identifier);

        $this->assertSame($identifier, $this->object->getIdentifier());
    }
}
