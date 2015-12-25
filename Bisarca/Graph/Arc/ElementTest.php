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

use Bisarca\Graph\Vertex\Element as Vertex;
use Bisarca\Graph\Vertex\Set as Vertices;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \Bisarca\Graph\Arc\Element
 */
class ElementTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Vertex
     */
    protected $tail;

    /**
     * @var Vertex
     */
    protected $head;

    /**
     * @var Arc
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
        $this->tail = new Vertex(rand());
        $this->head = new Vertex(rand());

        $this->object = new Element($this->tail, $this->head);
    }

    /**
     * @covers ::getTail
     */
    public function testGetTail()
    {
        $this->assertSame(
            $this->tail->getIdentifier(),
            $this->object->getTail()->getIdentifier()
        );
    }

    /**
     * @covers ::setTail
     * @depends testGetTail
     */
    public function testSetTail()
    {
        $tail = new Vertex(rand());

        $setterOutput = $this->object->setTail($tail);
        $this->assertInstanceOf(Element::class, $setterOutput);

        $this->assertSame(
            $tail->getIdentifier(),
            $this->object->getTail()->getIdentifier()
        );
    }

    /**
     * @covers ::getHead
     */
    public function testGetHead()
    {
        $this->assertSame(
            $this->head->getIdentifier(),
            $this->object->getHead()->getIdentifier()
        );
    }

    /**
     * @covers ::setHead
     * @depends testGetHead
     */
    public function testSetHead()
    {
        $head = new Vertex(rand());

        $setterOutput = $this->object->setHead($head);
        $this->assertInstanceOf(Element::class, $setterOutput);

        $this->assertSame(
            $head->getIdentifier(),
            $this->object->getHead()->getIdentifier()
        );
    }

    /**
     * @covers ::getEndvertices
     */
    public function testGetEndvertices()
    {
        $endvertices = $this->object->getEndvertices();

        $this->assertInstanceOf(Vertices::class, $endvertices);
        $this->assertCount(2, $endvertices);
        $this->assertEquals(
            new Vertices($this->tail, $this->head),
            $endvertices
        );
    }
}
