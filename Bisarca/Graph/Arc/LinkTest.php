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
use Exception;

/**
 * @coversDefaultClass \Bisarca\Graph\Arc\Link
 */
class LinkTest extends ElementTest
{
    /**
     * @covers ::__construct
     */
    public function testConstruct()
    {
        $this->tail = new Vertex(rand());
        $this->head = new Vertex(rand());

        $this->object = new Link($this->tail, $this->head);
    }

    /**
     * @covers ::__construct
     */
    public function testWrongConstruct()
    {
        $this->tail = new Vertex;
        $this->head = new Vertex;

        $this->setExpectedException(Exception::class);
        $this->object = new Link($this->tail, $this->head);
    }
}
