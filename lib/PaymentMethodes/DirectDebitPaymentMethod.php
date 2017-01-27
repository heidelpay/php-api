<?php

namespace Heidelpay\PhpApi\PaymentMethodes;

/**
 * Direct debit payment Class
 *
 * Direct debit payment method
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
class DirectDebitPaymentMethod extends AbstractPaymentMethod
{
    public function __construct()
    {
        $this->_paymentCode = 'DD';
        $this->_canAuthorise = true;
        $this->_canCapture = true;
        $this->_canDebit = true;
        $this->_canRefund = true;
        $this->_canReversal = true;
        $this->_canRebill = true;
        $this->_canRegistration = true;
        $this->_canDebitOnRegistration = true;
        $this->_canAuthorizeOnRegistration = true;
        $this->_brand = "SOFORT";
    }
}
