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
 */
interface ElementInterface
{
    /**
     * Gets the element identifier.
     *
     * @return mixed
     */
    public function getIdentifier();

    /**
     * Sets the element identifier.
     *
     * @param mixed $identifier The identifier.
     *
     * @return ElementInterface
     */
    public function setIdentifier($identifier = null);
}
