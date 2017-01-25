<?php
namespace Heidelpay\PhpApi\PaymentMethodes;

/**
 * Debit Card Payment Class
 *
 * This class will be used for every debit card transaction
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
class DebitCardPaymentMethod extends AbstractPaymentMethod
{
    public function __construct()
    {
        $this->_paymentCode = 'DC';
        $this->_canAuthorise = true;
        $this->_canCapture = true;
        $this->_canDebit = true;
        $this->_canRefund = true;
        $this->_canReversal = true;
        $this->_canRebill = true;
        $this->_canRegistration = true;
        $this->_canDebitOnRegistration = true;
        $this->_canAuthorizeOnRegistration = true;
    }

    /**
     * Payment type authorisation
     *
     * Depending on the payment method this type normally means that the amount
     * of the given account will only be authorized. In case of payment methods
     * like Sofort and Giropay (so called online payments) this type will only be
     * used to get the redirect to their systems.
     * Because of the payment card industry restrictions (Aka pci3), you have
     * to use a payment frame solution to handle the customers credit card information.
     *
     * @param string  $PaymentFrameOrigin   Uri of your application like https://dev.heidelpay.de
     * @param boolean $PreventAsyncRedirect This will tell the payment weather it should redirect the customer or not
     * @param string  $CssPath              Url to style the Heidelpay payment frame
     *
     * @return \Heidelpay\PhpApi\PaymentMethodes\CreditCardPaymentMethod|boolean
     */
    public function authorize($PaymentFrameOrigin = null, $PreventAsyncRedirect = "FALSE", $CssPath = null)
    {
        if ($this->_canAuthorise) {
            /**
             * Because of the payment card industriy restictions (Aka pci3) you have
             * to use a payment frame for the input of credit card information
             */
            $this->getRequest()->getFrontend()->set('enabled', 'TRUE');
            $this->getRequest()->getFrontend()->set('payment_frame_origin', $PaymentFrameOrigin);
            $this->getRequest()->getFrontend()->set('prevent_async_redirect', $PreventAsyncRedirect);
            $this->getRequest()->getFrontend()->set('css_path', $CssPath);
            
            return parent::authorize();
        }
    }
    
    /**
     * Payment type debit
     *
     * This payment type will charge the given account directly.
     * Because of the payment card industry restrictions (Aka pci3), you have
     * to use a payment frame solution to handle the customers credit card information.
     *
     * @param string  $PaymentFrameOrigin   uri of your application like https://dev.heidelpay.de
     * @param boolean $PreventAsyncRedirect this will tell the payment weather it should redirect the customer or not
     * @param string  $CssPath              url to style the Heidelpay payment frame
     *
     * @return \Heidelpay\PhpApi\PaymentMethodes\CreditCardPaymentMethod|boolean
     */
    public function debit($PaymentFrameOrigin = null, $PreventAsyncRedirect = "FALSE", $CssPath = null)
    {
        if ($this->_canDebit) {
            /**
             * Because of the payment card industriy restictions (Aka pci3) you have
             * to use a payment frame for the input of credit card information
             */
            $this->getRequest()->getFrontend()->set('payment_frame_origin', $PaymentFrameOrigin);
            $this->getRequest()->getFrontend()->set('prevent_async_redirect', $PreventAsyncRedirect);
            $this->getRequest()->getFrontend()->set('css_path', $CssPath);
    
            return parent::debit();
        }
    }

    /**
     * Payment type registration
     *
     * This payment type will be used to save account data inside the heidelpay
     * system. You will get a payment reference id back. This gives you a way
     * to charge this account later or even to make a recurring payment.
     * Because of the payment card industry restrictions (Aka pci3), you have
     * to use a payment frame solution to handle the customers credit card information.
     *
     * @param string  $PaymentFrameOrigin   uri of your application like https://dev.heidelpay.de
     * @param boolean $PreventAsyncRedirect this will tell the payment weather it should redirect the customer or not
     * @param string  $CssPath              url to style the Heidelpay payment frame
     *
     * @return \Heidelpay\PhpApi\PaymentMethodes\CreditCardPaymentMethod|boolean
     */
    public function registration($PaymentFrameOrigin = null, $PreventAsyncRedirect = "FALSE", $CssPath = null)
    {
        if ($this->_canRegistration) {
            /**
             * Because of the payment card industriy restictions (Aka pci3) you have
             * to use a payment frame for the input of credit card information
             */
            $this->getRequest()->getFrontend()->set('payment_frame_origin', $PaymentFrameOrigin);
            $this->getRequest()->getFrontend()->set('prevent_async_redirect', $PreventAsyncRedirect);
            $this->getRequest()->getFrontend()->set('css_path', $CssPath);
    
            return parent::registration();
        }
    }
}
