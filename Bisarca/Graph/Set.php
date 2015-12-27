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

use ArrayIterator;
use Countable;
use IteratorAggregate;
use ReflectionClass;

/**
 * @todo documentation
 */
class Set implements Countable, IteratorAggregate
{
    /**
     * Set elements.
     *
     * @var ElementInterface[]
     */
    private $elements = [];

    /**
     * Set initialization.
     *
     * @param ElementInterface[] $elements Elements to include in the set.
     */
    public function __construct(ElementInterface ...$elements)
    {
        $this->elements = $elements;
    }

    /**
     * Sets union.
     *
     * @param Set $set Set to merge.
     *
     * @return Set
     */
    public function union(Set $set)
    {
        $reflection = new ReflectionClass(get_class($this));
        $set        = $reflection->newInstanceArgs($set->elements);

        $subset = array_filter($set->elements, function ($element) {
            return !in_array($element, $this->elements, true);
        });

        foreach ($subset as &$element) {
            $this->elements[] = $element;
        }

        return $this;
    }

    /**
     * Sets intersection.
     *
     * @param Set $set Set to intersect.
     *
     * @return Set
     */
    public function intersection(Set $set)
    {
        $reflection = new ReflectionClass(get_class($this));
        $set        = $reflection->newInstanceArgs($set->elements);

        $subset = array_filter($set->elements, function ($element) {
            return in_array($element, $this->elements, true);
        });

        $this->elements = array_values($subset);

        return $this;
    }

    /**
     * Sets difference.
     *
     * @param Set $set Set used for the difference.
     *
     * @return Set
     */
    public function difference(Set $set)
    {
        $reflection = new ReflectionClass(get_class($this));
        $set        = $reflection->newInstanceArgs($set->elements);

        $subset = array_filter($set->elements, function ($element) {
            return !in_array($element, $this->elements, true);
        });

        $this->elements = array_values($subset);

        return $this;
    }

    /**
     * Count the number of elements contained.
     *
     * @return int
     */
    public function count()
    {
        return count($this->elements);
    }

    /**
     * Gets an iterator for set elements.
     *
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->elements);
    }
}
