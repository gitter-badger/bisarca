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

use Bisarca\Graph\Arc\Element as Arc;
use Bisarca\Graph\Arc\Set as Arcs;
use Bisarca\Graph\SetTest as BaseSetTest;

/**
 * @coversDefaultClass \Bisarca\Graph\Vertex\Set
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
        return $this->getMock(Element::class);
    }

    /**
     * @covers ::union
     * @covers ::__construct
     */
    public function testUnionWrongType()
    {
        $this->setExpectedException(
            PHP_MAJOR_VERSION < 7 ? 'PHPUnit_Framework_Error' : 'TypeError'
        );

        $this->object->union(
            new Arcs($this->getWrongMockedElement())
        );
    }

    /**
     * @covers ::intersection
     * @covers ::__construct
     * @depends testUnionWrongType
     */
    public function testIntersectionWrongType()
    {
        $this->setExpectedException(
            PHP_MAJOR_VERSION < 7 ? 'PHPUnit_Framework_Error' : 'TypeError'
        );

        $this->object->intersection(
            new Arcs($this->getWrongMockedElement())
        );
    }

    /**
     * @covers ::difference
     * @covers ::__construct
     * @depends testUnionWrongType
     */
    public function testDifferenceWrongType()
    {
        $this->setExpectedException(
            PHP_MAJOR_VERSION < 7 ? 'PHPUnit_Framework_Error' : 'TypeError'
        );

        $this->object->difference(
            new Arcs($this->getWrongMockedElement())
        );
    }

    /**
     * @return Arc
     */
    private function getWrongMockedElement()
    {
        return $this
            ->getMockBuilder(Arc::class)
            ->setConstructorArgs([
                $this->getMock(Element::class),
                $this->getMock(Element::class),
            ])
            ->getMock();
    }
}
