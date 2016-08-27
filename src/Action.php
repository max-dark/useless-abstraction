<?php
/**
 * @copyright Copyright (C) 2016. Max Dark maxim.dark@gmail.com
 * @license MIT; see LICENSE.txt
 */

namespace useless\abstraction;

/**
 * Interface Action
 * @package useless\abstraction
 */
interface Action
{
    /**
     * Action constructor.
     * @param Storage $storage
     */
    public function __construct(Storage $storage);
}
