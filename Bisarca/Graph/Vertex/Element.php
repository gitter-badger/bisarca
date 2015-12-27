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

use Bisarca\Graph\ElementInterface;
use Bisarca\Graph\IdentifiableTrait;

/**
 * @todo documentation
 */
class Element implements ElementInterface
{
    use IdentifiableTrait;

    /**
     * Constructor with optional identifier.
     *
     * @param mixed $identifier The vertex identifier.
     */
    public function __construct($identifier = null)
    {
        $this->setIdentifier($identifier);
    }
}
