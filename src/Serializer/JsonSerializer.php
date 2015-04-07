<?php

/*
 * This file is part of the Cekurte package.
 *
 * (c) João Paulo Cercal <jpcercal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cekurte\ComponentBundle\Serializer;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializationContext;

/**
 * JSON Serializer
 *
 * @author João Paulo Cercal <jpcercal@gmail.com>
 *
 * @version 2.0
 */
class JsonSerializer extends AbstractSerializer implements SerializerInterface
{
    /**
     * @inheritdoc
     */
    public function serialize($data, SerializationContext $context = null)
    {
        return $this->getSerializer()->serialize($data, SerializerInterface::FORMAT_JSON, $context);
    }

    /**
     * @inheritdoc
     */
    public function deserialize($data, $type, DeserializationContext $context = null)
    {
        return $this->getSerializer()->deserialize($data, $type, SerializerInterface::FORMAT_JSON, $context);
    }
}
