<?php

/*
 * This file is part of the Assetic package, an OpenSky project.
 *
 * (c) 2010-2011 OpenSky Project Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Assetic\Filter\Sass;

/**
 * Loads Compass files.
 *
 * The Compass filter requires SASS >= 3.1.0.
 *
 * @author Maxime Thirouin <dev@moox.fr>
 */
class CompassFilter extends SassFilter
{
    public function __construct($baseDir, $sassPath = '/usr/bin/sass')
    {
        parent::__construct($baseDir, $sassPath);

        $this->setCompass(true);
    }
}
