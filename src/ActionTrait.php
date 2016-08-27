<?php
/**
 * @copyright Copyright (C) 2016. Max Dark maxim.dark@gmail.com
 * @license MIT; see LICENSE.txt
 */

namespace useless\abstraction;

/**
 * Trait ActionTrait
 * @package useless\abstraction
 */
trait ActionTrait
{
    /**
     * @var Storage $storage
     */
    private $storage;

    /**
     * Configure storage
     *
     * @param Storage $storage
     * @param string $modelClass
     */
    private function init(Storage $storage, $modelClass)
    {
        $this->storage = $storage->forModel($modelClass);
    }
}
