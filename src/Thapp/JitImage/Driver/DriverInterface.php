<?php

/**
 * This File is part of the Thapp\JitImage\Driver package
 *
 * (c) Thomas Appel <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Thapp\JitImage\Driver;

/**
 * Interface DriverInterface
 *
 * @package Thapp\JitImage
 * @version
 * @author Thomas Appel <mail@thomas-appel.com>
 * @license MIT
 */
interface DriverInterface
{
    /**
     * load the imagefile resource
     *
     * @param  string $source
     * @access public
     * @return void
     */
    public function load($source);

    /**
     * apply an imagefilter
     *
     * @param string $name    the name of the filter
     * @param array  $options filter options
     *
     * @access public
     * @return boolean|void
     */
    public function filter($name, $options);

    /**
     * process the image
     *
     * This sould be called after the filters
     * have been applied.
     * Some drivers need this
     * to work properly (e.g `im`).
     *
     * @access public
     * @return void
     */
    public function process();

    /**
     *
     * Clean up resources
     *
     * This should be called after the image was process.
     * In some cases this will clean temporary files in
     * `/var/tmp`
     *
     * @access public
     * @return void
     */
    public function clean();

    /**
     * registers an imagefilter
     *
     * @param  string $alias filter alias
     * @param  string $class full qualified classname of the filter
     * @access public
     * @return void
     */
    public function registerFilter($alias, $class);

    /**
     * setOutPutType
     *
     * @param mixed $type
     * @access public
     * @return mixed
     */
    public function setOutPutType($type);

    /**
     * get the file contents of the image
     *
     * @access public
     * @return string
     */
    public function getImageBlob();

    /**
     * getTargetSize
     *
     * @access public
     * @return mixed
     */
    public function getTargetSize();

    /**
     * getResource
     *
     * @access public
     * @return void
     */
    public function getResource();

    /**
     * swapResource
     *
     * @param mixed $resource
     * @access public
     * @return void
     */
    public function swapResource($resource);
}