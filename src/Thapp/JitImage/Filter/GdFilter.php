<?php

/**
 * This File is part of the Thapp\JitImage package
 *
 * (c) Thomas Appel <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Thapp\JitImage\Filter;

/**
 * Class: ImFilter
 * Baseclass for Im filters.
 *
 * @uses AbstractFilter
 * @abstract
 *
 * @package Thapp\JitImage
 * @version $Id$
 * @author Thomas Appel <mail@thomas-appel.com>
 * @license MIT
 */
abstract class GdFilter extends AbstractFilter
{
    /**
     * driverType
     *
     * @var string
     */
    protected static $driverType = 'gd';
}
