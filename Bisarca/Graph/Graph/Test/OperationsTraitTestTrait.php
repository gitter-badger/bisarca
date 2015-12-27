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

namespace Bisarca\Graph\Graph\Test;

use Bisarca\Graph\Arc\Set as Arcs;
use Bisarca\Graph\Vertex\Set as Vertices;

trait OperationsTraitTestTrait
{
    /**
     * @covers \Bisarca\Graph\Graph\OperationsTrait::size
     */
    public function testSize()
    {
        $size = $this->object->size();

        $this->assertInternalType('integer', $size);
        $this->assertSame(0, $size);
    }

    /**
     * @covers \Bisarca\Graph\Graph\OperationsTrait::order
     */
    public function testOrder()
    {
        $order = $this->object->order();

        $this->assertInternalType('integer', $order);
        $this->assertSame(0, $order);
    }

    /**
     * @covers \Bisarca\Graph\Graph\OperationsTrait::getArcs
     */
    public function testGetArcs()
    {
        $this->assertInstanceOf(
            Arcs::class,
            $this->object->getArcs()
        );
    }

    /**
     * @covers \Bisarca\Graph\Graph\OperationsTrait::getVertices
     */
    public function testGetVertices()
    {
        $this->assertInstanceOf(
            Vertices::class,
            $this->object->getVertices()
        );
    }
}
