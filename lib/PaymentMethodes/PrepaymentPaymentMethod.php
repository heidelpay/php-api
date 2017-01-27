<?php

namespace Heidelpay\PhpApi\PaymentMethodes;

/**
 * Prepayment Payment Class
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
class PrepaymentPaymentMethod extends AbstractPaymentMethod
{
    public function __construct()
    {
        $this->_paymentCode = 'PP';
        $this->_canAuthorise = true;
        $this->_canRefund = true;
        $this->_canReversal = true;
    }
}
