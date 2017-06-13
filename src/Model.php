<?php
/**
 * @copyright Copyright (C) 2016-2017. Max Dark maxim.dark@gmail.com
 * @license MIT; see LICENSE.txt
 */

namespace useless\abstraction;

/**
 * Interface Model
 * @package useless\abstraction
 */
interface Model
{
    /**
     * @param int $value
     * @return void
     */
    public function setUID($value);

    /**
     * @return int UID for this model
     */
    public function getUID();

    /**
     * @return array field values
     */
    public function getFields();

    /**
     * @return string name of storage for this model
     */
    public static function name();
}
