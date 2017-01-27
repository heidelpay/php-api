<?php

namespace Heidelpay\PhpApi\PaymentMethodes;

/**
 * Giropay Payment Class
 *
 * Giropay is a payment method from giropay GmbH in Germany.
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
class GiropayPaymentMethod extends AbstractPaymentMethod
{
    public function __construct()
    {
        $this->_paymentCode = 'OT';
        $this->_canAuthorise = true;
        $this->_canRefund = true;
        $this->_canReversal = true;
        $this->_brand = "GIROPAY";
    }
}
