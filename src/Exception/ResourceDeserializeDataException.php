<?php

/*
 * This file is part of the Cekurte package.
 *
 * (c) João Paulo Cercal <jpcercal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cekurte\ComponentBundle\Exception;

/**
 * ResourceDeserializeDataException
 *
 * @author João Paulo Cercal <jpcercal@gmail.com>
 *
 * @version 2.0
 */
class ResourceDeserializeDataException extends ResourceException
{
    /**
     * Init.
     *
     * @param string     $message
     * @param \Exception $previous
     */
    public function __construct($message = "", \Exception $previous = null)
    {
        parent::__construct($message, ResourceException::RESOURCE_DESERIALIZE_DATA_ERROR_CODE, $previous);
    }
}
