<?php

/*
 * This file is part of the easybook application.
 *
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Easybook\Parsers;

class BaseParser
{
    protected $app;
    
    public function __construct($app)
    {
        $this->app = $app;
    }
}
