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

namespace Bisarca\Graph\Graph;

use Bisarca\Graph\Arc\Set as Arcs;
use Bisarca\Graph\Vertex\Set as Vertices;

/**
 * @todo documentation
 */
class Operations
{
    /**
     * The size of a graph is the number of its edges.
     * 
     * @param Arcs $arcs Arcs set.
     *
     * @return int
     */
    public static function size(Arcs $arcs)
    {
        return count($arcs);
    }

    /**
     * The order of a graph is the number of its vertices.
     * 
     * @param Vertices $vertices Vertices set.
     *
     * @return int
     */
    public static function order(Vertices $vertices)
    {
        return count($vertices);
    }
}
