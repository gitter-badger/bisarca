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
 * @todo documentation
 */
class Link extends Element
{
    /**
     * Link definition.
     *
     * @param Vertex $tail Initial vertex.
     * @param Vertex $head Terminal vertex.
     *
     * @todo exception
     */
    public function __construct(Vertex $tail, Vertex $head)
    {
        if ($tail->getIdentifier() === $head->getIdentifier()) {
            throw new Exception;
        }

        parent::__construct($tail, $head);
    }
}
