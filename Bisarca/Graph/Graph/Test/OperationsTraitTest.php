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

use Bisarca\Graph\Graph\OperationsTrait;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \Bisarca\Graph\Graph\OperationsTrait
 */
class OperationsTraitTest extends PHPUnit_Framework_TestCase
{
    use OperationsTraitTestTrait;

    /**
     * @var OperationsTrait
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = $this->getMockForTrait(OperationsTrait::class);
    }
}
