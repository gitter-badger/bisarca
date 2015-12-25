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

namespace Bisarca\Graph;

/**
 * @todo documentation
 * @todo operations
 */
class Graph
{
    /**
     * Vertices set.
     *
     * @var Vertex\Set
     */
    private $vertices;

    /**
     * Arcs set.
     *
     * @var Arc\Set
     */
    private $arcs;

    /**
     * Constructor with optional initializations.
     *
     * @param null|Vertex\Set $vertices The vertices set.
     * @param null|Arc\Set    $arcs     The arcs set.
     */
    public function __construct(
        Vertex\Set $vertices = null,
        Arc\Set $arcs = null
    ) {
        $this->setVertices($vertices);
        $this->setArcs($arcs);
    }

    /**
     * Gets the vertices set.
     *
     * @return Vertex\Set
     */
    public function getVertices()
    {
        return $this->vertices;
    }

    /**
     * Sets the vertices set.
     *
     * @param null|Vertex\Set $vertices The vertices set.
     *
     * @return Graph
     */
    public function setVertices(Vertex\Set $vertices = null)
    {
        $this->vertices = $vertices ?: new Vertex\Set;

        return $this;
    }

    /**
     * Gets the arcs set.
     *
     * @return Arc\Set
     */
    public function getArcs()
    {
        return $this->arcs;
    }

    /**
     * Sets the arcs set.
     *
     * @param null|Arc\Set $arcs The arcs set.
     *
     * @return Graph
     */
    public function setArcs(Arc\Set $arcs = null)
    {
        $this->arcs = $arcs ?: new Arc\Set;

        return $this;
    }
}
