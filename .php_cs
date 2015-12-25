<?php

$header = <<<EOF
Copyright (C) 2016 Emanuele Minotto
This program is free software: you can redistribute it and/or modify it
under the terms of the GNU Affero General Public License as published by
the Free Software Foundation, version 3.

This program is distributed in the hope that it will be useful, but
WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

return Symfony\CS\Config\Config::create()
    ->fixers(array(
        '-concat_without_spaces',
        '-new_with_braces',
        '-phpdoc_no_empty_return',
        '-phpdoc_no_package',
        '-phpdoc_short_description',
        'align_double_arrow',
        'align_equals',
        'concat_with_spaces',
        'header_comment',
        'ordered_use',
        'php_unit_construct',
        'phpdoc_order',
        'short_array_syntax',
        'strict',
    ))
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(__DIR__.'/Bisarca')
    )
;
