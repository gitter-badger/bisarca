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

namespace Bisarca\Graph\Vertex;

use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \Bisarca\Graph\Vertex\Element
 */
class ElementTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Element
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->testConstruct();
    }

    /**
     * @covers ::__construct
     */
    public function testConstruct()
    {
        $this->object = new Element;
    }

    /**
     * @covers ::getIdentifier
     */
    public function testGetIdentifier()
    {
        $identifier   = rand();
        $this->object = new Element($identifier);

        $this->assertSame($identifier, $this->object->getIdentifier());
    }

    /**
     * @covers ::setIdentifier
     * @depends testGetIdentifier
     */
    public function testSetIdentifier()
    {
        $identifier = rand();

        $setterOutput = $this->object->setIdentifier($identifier);
        $this->assertInstanceOf(Element::class, $setterOutput);

        $this->assertSame($identifier, $this->object->getIdentifier());
    }
}
