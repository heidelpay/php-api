<?php

namespace Heidelpay\PhpApi\PaymentMethodes;

/**
 * iDeal Payment Class
 *
 * iDeal is a online payment method in the netherlands.
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
class IDealPaymentMethod extends AbstractPaymentMethod
{
    public function __construct()
    {
        $this->_paymentCode = 'OT';
        $this->_canAuthorise = true;
        $this->_brand = "IDEAL";
    }
}
