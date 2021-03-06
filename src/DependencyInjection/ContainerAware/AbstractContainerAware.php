<?php

/*
 * This file is part of the Cekurte package.
 *
 * (c) João Paulo Cercal <jpcercal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cekurte\ComponentBundle\DependencyInjection\ContainerAware;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * AbstractContainerAware
 *
 * @author João Paulo Cercal <jpcercal@gmail.com>
 *
 * @version 2.0
 *
 * @abstract
 */
class AbstractContainerAware extends ContainerAware
{
    /**
     * Get a instance of ContainerInterface.
     *
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }
}
