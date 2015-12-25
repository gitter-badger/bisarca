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

namespace Bisarca\Autoloader;

/**
 * @todo documentation
 */
interface Autoloader
{
    const NAMESPACE_SEPARATOR = '\\';

    /**
     * Register current autoloader.
     *
     * @param bool $prepend If true, will prepend the autoloader on the
     *                      autoload queue instead of appending it.
     * 
     * @return bool
     */
    public function register($prepend = false);

    /**
     * Unregister current autoloader.
     * 
     * @return bool
     */
    public function unregister();

    /**
     * Checks if current autoloader is registered.
     * 
     * @return bool
     */
    public function isRegistered();

    /**
     * Invokes autoloading.
     * 
     * @return bool
     */
    public function __invoke();
}
