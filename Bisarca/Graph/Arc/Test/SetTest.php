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

namespace Bisarca\Graph\Arc;

use Bisarca\Graph\Test\SetTest as BaseSetTest;
use Bisarca\Graph\Vertex\Element as Vertex;
use Bisarca\Graph\Vertex\Set as Vertices;

/**
 * @coversDefaultClass \Bisarca\Graph\Arc\Set
 */
class SetTest extends BaseSetTest
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Set;
    }

    /**
     * @return Element
     */
    protected function getMockedElement()
    {
        return $this
            ->getMockBuilder(Element::class)
            ->setConstructorArgs([
                $this->getMock(Vertex::class),
                $this->getMock(Vertex::class),
            ])
            ->getMock();
    }

    /**
     * @covers ::__construct
     * @covers ::union
     */
    public function testUnionWrongType()
    {
        $this->setExpectedException(
            PHP_MAJOR_VERSION < 7 ? 'PHPUnit_Framework_Error' : 'TypeError'
        );

        $this->object->union(new Vertices(new Vertex));
    }

    /**
     * @covers ::__construct
     * @covers ::intersection
     * @depends testUnionWrongType
     */
    public function testIntersectionWrongType()
    {
        $this->setExpectedException(
            PHP_MAJOR_VERSION < 7 ? 'PHPUnit_Framework_Error' : 'TypeError'
        );

        $this->object->intersection(new Vertices(new Vertex));
    }

    /**
     * @covers ::__construct
     * @covers ::difference
     * @depends testUnionWrongType
     */
    public function testDifferenceWrongType()
    {
        $this->setExpectedException(
            PHP_MAJOR_VERSION < 7 ? 'PHPUnit_Framework_Error' : 'TypeError'
        );

        $this->object->difference(new Vertices(new Vertex));
    }
}
