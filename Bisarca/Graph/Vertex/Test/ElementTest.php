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

namespace Bisarca\Graph\Vertex\Test;

use Bisarca\Graph\Test\IdentifiableTraitTestTrait;
use Bisarca\Graph\Vertex\Element;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \Bisarca\Graph\Vertex\Element
 */
class ElementTest extends PHPUnit_Framework_TestCase
{
    use IdentifiableTraitTestTrait;

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
        $this->object = new Element(rand());
    }
}
