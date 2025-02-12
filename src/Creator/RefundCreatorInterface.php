<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\RefundPlugin\Creator;

use Sylius\RefundPlugin\Model\RefundTypeInterface;

interface RefundCreatorInterface
{
    public function __invoke(string $orderNumber, int $unitId, int $amount, RefundTypeInterface $refundType): void;
}
