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
use Bisarca\Graph\Graph\Operations;
use Bisarca\Graph\Vertex\Set as Vertices;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \Bisarca\Graph\Graph\Operations
 */
class OperationsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::size
     */
    public function testSize()
    {
        $this->assertSame(0, Operations::size(new Arcs));

        $this->setExpectedException(
            PHP_MAJOR_VERSION < 7 ? 'PHPUnit_Framework_Error' : 'TypeError'
        );
        Operations::size(new Vertices);
    }

    /**
     * @covers ::order
     */
    public function testOrder()
    {
        $this->assertSame(0, Operations::order(new Vertices));

        $this->setExpectedException(
            PHP_MAJOR_VERSION < 7 ? 'PHPUnit_Framework_Error' : 'TypeError'
        );
        Operations::order(new Arcs);
    }
}
