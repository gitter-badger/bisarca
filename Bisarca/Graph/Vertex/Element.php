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

/**
 * @todo documentation
 */
class Element implements ElementInterface
{
    /**
     * Vertex identifier.
     *
     * @var mixed
     */
    private $identifier;

    /**
     * Constructor with optional identifier.
     *
     * @param mixed $identifier The vertex identifier.
     */
    public function __construct($identifier = null)
    {
        $this->identifier = $identifier;
    }

    /**
     * Gets the vertex identifier.
     *
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets the vertex identifier.
     *
     * @param mixed $identifier The vertex identifier.
     *
     * @return Element
     */
    public function setIdentifier($identifier = null)
    {
        $this->identifier = $identifier;

        return $this;
    }
}
