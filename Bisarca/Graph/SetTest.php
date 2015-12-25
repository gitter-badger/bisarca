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

namespace Bisarca\Graph;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use Traversable;

/**
 * @coversDefaultClass \Bisarca\Graph\Set
 */
class SetTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Set
     */
    protected $object;

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
    public function testUnion()
    {
        $class = get_class($this->object);
        $set   = new $class(
            $this->getMockedElement(),
            $this->getMockedElement()
        );

        $output = $this->object->union($set);
        $this->assertInstanceOf(get_class($this->object), $output);

        $this->assertEquals($set, $this->object);
    }

    /**
     * @covers ::intersection
     * @covers ::__construct
     * @depends testUnion
     */
    public function testIntersection()
    {
        $class = get_class($this->object);
        $ref   = $this->getMockedElement();

        $this->object->union(new $class(
            $this->getMockedElement(),
            $ref
        ));

        $output = $this->object->intersection(new $class(
            $this->getMockedElement(),
            $ref
        ));
        $this->assertInstanceOf(get_class($this->object), $output);

        $this->assertEquals(new $class($ref), $this->object);
    }

    /**
     * @covers ::difference
     * @covers ::__construct
     * @depends testUnion
     */
    public function testDifference()
    {
        $class = get_class($this->object);
        $ref1  = $this->getMockedElement();
        $ref2  = $this->getMockedElement();

        $this->object->union(new $class($ref1, $ref2));

        $output = $this->object->difference(new $class(
            $this->getMockedElement(),
            $ref1
        ));
        $this->assertInstanceOf(get_class($this->object), $output);

        $this->assertEquals(new $class($ref2), $this->object);
    }

    /**
     * @covers ::count
     * @depends testUnion
     */
    public function testCount()
    {
        $class = get_class($this->object);
        $this->assertCount(0, $this->object);

        $totalElements = rand(1, 10);
        for ($i = 0; $i < $totalElements; ++$i) {
            $this->object->union(new $class(
                $this->getMockedElement()
            ));
        }

        $this->assertCount($totalElements, $this->object);
    }

    /**
     * @covers ::getIterator
     */
    public function testGetIterator()
    {
        $this->assertInstanceOf(Traversable::class, $this->object);
        $this->assertInstanceOf(
            ArrayIterator::class,
            $this->object->getIterator()
        );
    }
}
