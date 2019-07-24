<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ManishJoy\StripePayment\Model\Config;

use Magento\Checkout\Model\ConfigProviderInterface;
use \Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Framework\UrlInterface;

/**
 * Class CheckoutConfigProvider
 */
class CheckoutConfigProvider implements ConfigProviderInterface
{
    const STORE_SCOPE = \Magento\Store\Model\ScopeInterface::SCOPE_STORES;

    protected $_scopeConfig;

    /**
     * @param CurrentCustomer $currentCustomer
     * @param AgreementFactory $agreementFactory
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        UrlInterface $urlInterface
    ) {
        $this->_scopeConfig = $scopeConfig;
        $this->_urlInterface = $urlInterface;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        $lpcheckoutConfig = array();
        $lpcheckoutConfig['instructions'] = $this->getStoreConfigValue("instructions");
        $lpcheckoutConfig['secretkey'] = $this->getStoreConfigValue("secretkey");
        $methodCode = 'stripe';
        $config = [
            'payment' => [
                'ccform' => [
                    'availableTypes' => [$methodCode => $this->getCcAvailableTypes($methodCode)],
                    'months' => [$methodCode => $this->getCcMonths()],
                    'years' => [$methodCode => $this->getCcYears()],
                    'hasVerification' => [$methodCode => $this->hasVerification($methodCode)],
                    'cvvImageUrl' => [$methodCode => $this->getCvvImageUrl()]
                ]
            ]
        ];

        return $config;
    }

    public function getStoreConfigValue($fieldId)
    {
        return $this->_scopeConfig->getValue(
                    "payment/stripe/".$fieldId, 
                    self::STORE_SCOPE
                );
    }
}
