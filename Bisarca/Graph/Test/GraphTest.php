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

use Bisarca\Graph\Arc;
use Bisarca\Graph\Graph;
use Bisarca\Graph\Graph\Test\OperationsTraitTestTrait;
use Bisarca\Graph\Set;
use Bisarca\Graph\Vertex;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \Bisarca\Graph\Graph
 */
class GraphTest extends PHPUnit_Framework_TestCase
{
    use OperationsTraitTestTrait;

    /**
     * @var Graph
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
        $this->object = new Graph;
    }

    /**
     * @covers ::getVertices
     */
    public function testGetVertices()
    {
        $vertices = $this->object->getVertices();

        $this->assertInstanceOf(Set::class, $vertices);

        foreach ($vertices as $vertex) {
            $this->assertInstanceOf(Vertex\Element::class, $vertex);
        }
    }

    /**
     * @covers ::setVertices
     * @depends testGetVertices
     */
    public function testSetVertices()
    {
        $setterOutput = $this->object->setVertices(null);
        $this->assertInstanceOf(Graph::class, $setterOutput);

        $this->testGetVertices();

        $setterOutput = $this->object->setVertices(new Vertex\Set);
        $this->assertInstanceOf(Graph::class, $setterOutput);

        $this->testGetVertices();

        $this->setExpectedException(
            PHP_MAJOR_VERSION < 7 ? 'PHPUnit_Framework_Error' : 'TypeError'
        );
        $this->object->setVertices(new Arc\Set);
    }

    /**
     * @covers ::getArcs
     */
    public function testGetArcs()
    {
        $arcs = $this->object->getArcs();

        $this->assertInstanceOf(Set::class, $arcs);

        foreach ($arcs as $arc) {
            $this->assertInstanceOf(Arc\Element::class, $arc);
        }
    }

    /**
     * @covers ::setArcs
     * @depends testGetArcs
     */
    public function testSetArcs()
    {
        $setterOutput = $this->object->setArcs(null);
        $this->assertInstanceOf(Graph::class, $setterOutput);

        $this->testGetArcs();

        $setterOutput = $this->object->setArcs(new Arc\Set);
        $this->assertInstanceOf(Graph::class, $setterOutput);

        $this->testGetArcs();

        $this->setExpectedException(
            PHP_MAJOR_VERSION < 7 ? 'PHPUnit_Framework_Error' : 'TypeError'
        );
        $this->object->setArcs(new Vertex\Set);
    }
}
