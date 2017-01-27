<?php

namespace Heidelpay\PhpApi\PaymentMethodes;

/**
 * Przelewy24 Payment Class
 *
 * Przelewy24 is a payment method in Poland.
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link  https://dev.heidelpay.de/PhpApi
 *
 * @author  Ronja Wann
 *
 * @package  Heidelpay
 * @subpackage PhpApi
 * @category PhpApi
 */
class Przelewy24PaymentMethod extends AbstractPaymentMethod
{
    public function __construct()
    {
        $this->_paymentCode = 'OT';
        $this->_canAuthorise = true;
        $this->_canRefund = true;
        $this->_canReversal = true;
        $this->_brand = "PRZELEWY24";
    }
}
