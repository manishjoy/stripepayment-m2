define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'stripe',
                component: 'ManishJoy_StripePayment/js/view/payment/method-renderer/stripe-method'
            }
        );
        return Component.extend({});
    }
);