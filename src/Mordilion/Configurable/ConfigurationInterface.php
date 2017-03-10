<?php

/**
 * This file is part of the Mordilion\Configurable package.
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 *
 * @copyright (c) Henning Huncke - <mordilion@gmx.de>
 */

namespace Mordilion\Configurable;

/**
 * Mordilion\Configurable Configuration-Interface.
 *
 * @author Henning Huncke <mordilion@gmx.de>
 */
interface ConfigurationInterface extends \IteratorAggregate, \Countable
{
    /**
     * Constructor.
     *
     * @param array|obejct $data
     *
     * @throws \InvalidArgumentException if the provided data are not an array or not an object with the toArray() method
     *
     * @return void
     */
    public function __construct($data);

    /**
     * Magic __get-Method.
     *
     * @param mixed $name
     *
     * @return mixed
     */
    public function __get($name);

    /**
     * Magic __set-Method.
     *
     * @param mixed $name
     * @param mixed $value
     *
     * @return void
     */
    public function __set($name, $value);

    /**
     * Configures the provided object with the current data.
     *
     * @param Object $object
     *
     * @throws InvalidArgumentException If the provided $object is not an object.
     *
     * @return void
     */
    public function configure($object);

    /**
     * {@inheritdoc}
     */
    public function count();

    /**
     * Returns the value for the provided $key if exists.
     *
     * @param mixed $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * {@inheritdoc}
     */
    public function getIterator();

    /**
     * Merges the current configuration with the provided configuration.
     *
     * @param ConfigurationInterface $configuration
     *
     * @return void
     */
    public function merge(ConfigurationInterface $configuration);

    /**
     * Sets the $value for the provided $key.
     *
     * @param mixed $key
     * @param mixed $value
     *
     * @return void
     */
    public function set($key, $value);
}