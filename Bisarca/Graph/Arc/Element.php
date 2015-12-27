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

use Bisarca\Graph\ElementInterface;
use Bisarca\Graph\IdentifiableTrait;
use Bisarca\Graph\Vertex\Element as Vertex;
use Bisarca\Graph\Vertex\Set as Vertices;

/**
 * @todo documentation
 */
class Element implements ElementInterface
{
    use IdentifiableTrait;

    /**
     * Initial vertex.
     *
     * @var null|Vertex
     */
    private $tail;

    /**
     * Terminal vertex.
     *
     * @var null|Vertex
     */
    private $head;

    /**
     * Arc definition.
     *
     * @param Vertex $tail Initial vertex.
     * @param Vertex $head Terminal vertex.
     */
    public function __construct(Vertex $tail, Vertex $head)
    {
        $this->tail = $tail;
        $this->head = $head;
    }

    /**
     * Gets the Initial vertex.
     *
     * @return Vertex
     */
    public function getTail()
    {
        return $this->tail;
    }

    /**
     * Sets the Initial vertex.
     *
     * @param Vertex $tail The tail.
     *
     * @return self
     */
    public function setTail(Vertex $tail)
    {
        $this->tail = $tail;

        return $this;
    }

    /**
     * Gets the Terminal vertex.
     *
     * @return Vertex
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * Sets the Terminal vertex.
     *
     * @param Vertex $head The head.
     *
     * @return self
     */
    public function setHead(Vertex $head)
    {
        $this->head = $head;

        return $this;
    }

    /**
     * Gets endvertices.
     * 
     * @return Vertices
     */
    public function getEndvertices()
    {
        return new Vertices(
            $this->tail,
            $this->head
        );
    }
}
