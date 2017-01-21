<?php

namespace Heidelpay\PhpApi\PaymentMethodes;

/**
 * PayPal Payment Class
 *
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link  https://dev.heidelpay.de/PhpApi
 *
 * @author  Jens Richter
 *
 * @package  Heidelpay
 * @subpackage PhpApi
 * @category PhpApi
 */
class PayPalPaymentMethod extends AbstractPaymentMethod
{
    public function __construct()
    {
        $this->_paymentCode = 'VA';
        $this->_canAuthorise = true;
        $this->_canCapture = true;
        $this->_canDebit = true;
        $this->_canRefund = true;
        $this->_canReversal = true;
        $this->_brand = "PAYPAL";
    }
}
