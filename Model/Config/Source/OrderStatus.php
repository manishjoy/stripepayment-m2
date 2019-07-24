<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ManishJoy\StripePayment\Model\Config\Source;

/**
 * Order Statuses source model
 */
class OrderStatus extends \Magento\Sales\Model\Config\Source\Order\Status
{
    /**
     * @var string[]
     */
    protected $_stateStatuses = [
        \Magento\Sales\Model\Order::STATE_NEW,
        \Magento\Sales\Model\Order::STATE_PROCESSING,
        \Magento\Sales\Model\Order::STATE_COMPLETE,
        \Magento\Sales\Model\Order::STATE_PAYMENT_REVIEW,
        \Magento\Sales\Model\Order::STATE_HOLDED
    ];
}
