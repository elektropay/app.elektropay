<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


if ( ! class_exists('Composer\Autoload\ClassLoader', false)) {
    require_once APPPATH . '../../vendor/autoload.php';
}

use Omnipay\Omnipay;
use Omnipay\Common\CreditCard;

/**
 * SafeCharge DirectGateway
 *
 */
class SafeCharge_DirectGateway {

    protected $settings;

    //--------------------------------------------------------------------

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->settings = $this->Settings();
    }

    //--------------------------------------------------------------------

    public function Settings()
    {
        $settings = array();

        $settings['name'] = 'SafeCharge';
        $settings['class_name'] = 'safecharge_directgateway';
        $settings['external'] = false;
        $settings['no_credit_card'] = true;
        $settings['description'] = '';
        $settings['is_preferred'] = 1;
        $settings['setup_fee'] = '';
        $settings['monthly_fee'] = '';
        $settings['transaction_fee'] = '';
        $settings['purchase_link'] = 'http://www.safecharge.com/';
        $settings['allows_updates'] = 1;
        $settings['allows_refunds'] = 1;
        $settings['requires_customer_information'] = 1;
        $settings['requires_customer_ip'] = 1;
        $settings['required_fields'] = array(
            'enabled',
            'mode',
            'accept_visa',
            'accept_mc',
            'accept_discover',
            'accept_dc',
            'accept_amex',
            'username',
            'password',
            'vendor_id',
            'website_id',
            'currency',
            'descriptor',
            'merchant_phone_number',
            'merchant_name'
        );

        $settings['field_details'] = array(
            'enabled' => array(
                'text' => 'Enable this gateway?',
                'type' => 'radio',
                'options' => array(
                    '1' => 'Enabled',
                    '0' => 'Disabled'
                )
            ),
            'mode' => array(
                'text' => 'Mode',
                'type' => 'radio',
                'options' => array(
                    '1' => 'Live',
                    '0' => 'Test'
                )
            ),
            'username' => array(
                'text' => 'Username',
                'type' => 'text'
            ),
            'password' => array(
                'text' => 'Password',
                'type' => 'text'
            ),
            'vendor_id' => array(
                'text' => 'Vendor ID',
                'type' => 'text'
            ),
            'website_id' => array(
                'text' => 'Website ID',
                'type' => 'text'
            ),
            'currency' => array(
                'text' => 'Currency',
                'type' => 'select',
                'options' => array(
                    'GBP' => 'GBP - Pound Sterling',
                    'EUR' => 'EUR - Euro',
                    'USD' => 'USD - US Dollar',
                    'HKD' => 'HKD - Honk Kong Dollar',
                    'YEN' => 'YEN - Japanese Yen',
                    'AUD' => 'AUD - Australian Dollar',
                    'CAD' => 'CAD - Canadian Dollar',
                    'CNY' => 'CNY - Chinese Yuan',
                    'SKK' => 'SKK - Slovak Kuna',
                    'THB' => 'THB - Thai Baht',
                    'TRY' => 'TRY - Turkish Lyra',
                    'TWD' => 'TWD - Taiwan Dollar',
                    'EEK' => 'EEK - Estonian Kroon',
                    'HKD' => 'HKD - Honk Kong Dollar',
                    'HUF' => 'HUF - Hungarian Forint',
                    'INR' => 'INR - Indian Rupee',
                    'ISK' => 'ISK - Icelandic Krona',
                    'UAH' => 'UAH - Ukrainian Hryvnia',
                    'KRW' => 'KRW - South Korean Won',
                    'EGP' => 'EGP - Egyptian Pound',
                    'PHP' => 'PHP - Philippine Peso',
                    'BYR' => 'BYR - Belarusian Ruble',
                    'LTL' => 'LTL - Lithuanian Litas',
                    'MDL' => 'MDL - Moldovan Leu',
                    'NOK' => 'NOK - Norwegian Krone',
                    'ZAR' => 'ZAR - South African Rand',
                    'SEK' => 'SEK - Swedish Krone',
                    'CHF' => 'CHF - Swiss Franc',
                    'NIS' => 'NIS - Israeli Shekels',
                    'MXN' => 'MXN - Mexican Pesos',
                    'RUB' => 'RUB - Russian Rubles',
                    'KZT' => 'KZT - Kazah Tenge',
                    'NZD' => 'NZD - New Zealand Dollar',
                    'PLN' => 'PLN - Polish Zloty',
                    'RON' => 'RON - Romanian New Leu',
                    'SGD' => 'SGD - Singapore Dollar',
                    'COP' => 'COP - Columbian Peso',
                    'CZK' => 'CZK - Czech Koruna',
                    'DKK' => 'DKK - Danish Krone',
                    'BGN' => 'BGN - Bulgarian Lev',
                    'BRL' => 'BRL - Brazil Real',
                    'ARS' => 'ARS - Argentine Peso',
                    'AED' => 'AED - United Arab Emirates Dirham',
                    'AZM' => 'AZM - Azerbaijani Manat',
                    'CRC' => 'CRC - Costa Rican Colon',
                    'LVT' => 'LVT - Latvian Lats',
                    'VEF' => 'VEF - Venezuelan Bolivar'
                )
            ),
            'descriptor' => array(
                'text' => 'Descriptor',
                'type' => 'text'
            ),
            'merchant_phone_number' => array(
                'text' => 'Merchant Phone Number',
                'type' => 'text'
            ),
            'merchant_name' => array(
                'text' => 'Merchant Name',
                'type' => 'text'
            ),
            'accept_visa' => array(
                'text' => 'Accept VISA?',
                'type' => 'radio',
                'options' => array(
                    '1' => 'Yes',
                    '0' => 'No'
                )
            ),
            'accept_mc' => array(
                'text' => 'Accept MasterCard?',
                'type' => 'radio',
                'options' => array(
                    '1' => 'Yes',
                    '0' => 'No'
                )
            ),
            'accept_discover' => array(
                'text' => 'Accept Discover?',
                'type' => 'radio',
                'options' => array(
                    '1' => 'Yes',
                    '0' => 'No'
                )
            ),
            'accept_dc' => array(
                'text' => 'Accept Diner\'s Club?',
                'type' => 'radio',
                'options' => array(
                    '1' => 'Yes',
                    '0' => 'No'
                )
            ),
            'accept_amex' => array(
                'text' => 'Accept American Express?',
                'type' => 'radio',
                'options' => array(
                    '1' => 'Yes',
                    '0' => 'No'
                )
            )
        );

        return $settings;
    }

    //--------------------------------------------------------------------

    public function TestConnection($client_id, $gateway)
    {
        return true;
    }

    //--------------------------------------------------------------------

    public function Charge($client_id, $order_id, $gateway, $customer, $amount, $credit_card, $return_url = null, $cancel_url = null, $custom = array())
    {
        $CI =& get_instance();

        $omnipay = $this->LoadOmnipay($gateway);

        $card = new CreditCard(array(
            'firstName'     => $customer['first_name'],
            'lastName'      => $customer['last_name'],
            'email'     	=> $customer['email'],
            'number'        => $credit_card['card_num'],
            'expiryMonth'   => $credit_card['exp_month'],
            'expiryYear'    => $credit_card['exp_year'],
            'cvv'           => $credit_card['cvv']
        ));

        $data = array(
            'card'      => $card,
            'amount'    => $amount,
            'currency'  => $gateway['currency'],
            'firstname' => $customer['first_name'],
            'lastname'  => $customer['last_name'],
            'email'     => $customer['email'],
            'address1'  => isset($customer['address1']) ? $customer['address1'] : null,
            'address2'  => isset($customer['address2']) ? $customer['address2'] : null,
            'zip'       => isset($customer['postal_code']) ? $customer['postal_code'] : null,
            'state'     => isset($customer['state']) ? $customer['state'] : null,
            'country'   => isset($customer['country']) ? $customer['country'] : null
        );

        $data['nameOnCard'] = $credit_card['name'];

        $card->setBillingCountry($data['country']);
        $card->setEmail($customer['email']);

        if (isset($customer['ip_address']) and !empty($customer['ip_address'])) {
            $data['clientIp'] = $customer['ip_address'];
        }

        $response = array();

        try {
            $charge = $omnipay->purchase($data)->send();

            if ($charge->isSuccessful()) {
                // Successful Transaction
                $CI->load->model('order_authorization_model');
                $CI->order_authorization_model->SaveAuthorization(
                    $order_id, // order_id
                    $charge->getTransactionReference(), // tran_id
                    $charge->getAuthCode(), // authorization_code
                    $charge->getToken() // security_key
                );

                $CI->load->model('charge_data_model');
                // These two are also required for void/refund, yep...
                $CI->charge_data_model->Save($order_id, 'card_exp_month', $credit_card['exp_month']);
                $CI->charge_data_model->Save($order_id, 'card_exp_year', $credit_card['exp_year']);

                $CI->charge_model->SetStatus($order_id, 1);

                $response_array = array('charge_id' => $order_id);
                $response = $CI->response->TransactionResponse(1, $response_array);
            } else {
                // Failed Transaction
                throw new Exception($charge->getMessage());
            }
        } catch (Exception $e) {
            // Failed Transaction
            $CI->load->model('charge_model');
            $CI->charge_model->SetStatus($order_id, 0);

            $response_array = array('reason' => $e->getMessage());
            $response = $CI->response->TransactionResponse(2, $response_array);
        }

        return $response;
    }

    //--------------------------------------------------------------------

    public function Refund($client_id, $gateway, $charge, $authorization)
    {
        $CI =& get_instance();

        $omnipay = $this->LoadOmnipay($gateway);

        if (isset($charge['recurring_id']) && $charge['recurring_id'] > 0) {
            $CI->load->model('recurring_model');

            $subscription = $CI->recurring_model->GetSubscriptionDetails($client_id, $charge['recurring_id']);
            $api_customer_reference = json_decode($subscription['api_customer_reference']);
            $expMonth = $api_customer_reference->card_exp_month;
            $expYear = $api_customer_reference->card_exp_year;
        } else {
            $CI->load->model('charge_data_model');

            $charge_data = $CI->charge_data_model->Get($charge['id']);
            $expMonth = $charge_data['card_exp_month'];
            $expYear = $charge_data['card_exp_year'];
        }

        $data = array(
            'amount'        => $charge['amount'],
            'currency'      => $gateway['currency'],
            'token'         => $authorization->security_key,
            'transactionId' => $authorization->tran_id,
            'authCode'      => $authorization->authorization_code,
            'expMonth'      => $expMonth,
            'expYear'       => $expYear
        );

        try {
            $void = $omnipay->void($data)->send();

            if ($void->isSuccessful()) {
                return true;
            }
            else {
                $refund = $omnipay->refund($data)->send();

                if ($refund->isSuccessful()) {
                    return true;
                }
            }

            return false;
        } catch (Exception $e) {
            return false;
        }
    }

    //--------------------------------------------------------------------

    public function Recur($client_id, $gateway, $customer, $amount, $charge_today, $start_date, $end_date, $interval, $credit_card, $subscription_id, $total_occurrences = FALSE)
    {
        $CI =& get_instance();

        $response = array();

        // is there a payment for today?
        if ($charge_today === TRUE) {
            // Purchase

            // Create an order for today's payment
            $CI->load->model('charge_model');
            $customer['customer_id'] = (isset($customer['customer_id'])) ? $customer['customer_id'] : FALSE;
            $order_id = $CI->charge_model->CreateNewOrder($client_id, $gateway['gateway_id'], $amount, $credit_card, $subscription_id, $customer['customer_id'], $customer['ip_address']);

            $omnipay = $this->LoadOmnipay($gateway);

            $card = new CreditCard(array(
                'firstName'     => $customer['first_name'],
                'lastName'      => $customer['last_name'],
                'email'     	=> $customer['email'],
                'number'        => $credit_card['card_num'],
                'expiryMonth'   => $credit_card['exp_month'],
                'expiryYear'    => $credit_card['exp_year'],
                'cvv'           => $credit_card['cvv']
            ));

            $data = array(
                'card'      => $card,
                'amount'    => $amount,
                'currency'  => $gateway['currency'],
                'firstname' => $customer['first_name'],
                'lastname'  => $customer['last_name'],
                'email'     => $customer['email'],
                'address1'  => isset($customer['address1']) ? $customer['address1'] : null,
                'address2'  => isset($customer['address2']) ? $customer['address2'] : null,
                'zip'       => isset($customer['postal_code']) ? $customer['postal_code'] : null,
                'state'     => isset($customer['state']) ? $customer['state'] : null,
                'country'   => isset($customer['country']) ? $customer['country'] : null
            );

            $data['nameOnCard'] = $credit_card['name'];
            $data['billingCountry'] = $data['country'];

            if (isset($customer['ip_address']) and !empty($customer['ip_address'])) {
                $data['clientIp'] = $customer['ip_address'];
            }

            try {
                $charge = $omnipay->purchase($data)->send();

                if ($charge->isSuccessful()) {
                    // Successful Transaction
                    $CI->load->model('recurring_model');
                    // For SafeCharge:
                    // api_customer_reference = {card_exp_month: 07, card_exp_year:  2015}
                    // api_auth_number = token
                    // api_payment_reference = transactionId
                    $CI->recurring_model->SaveApiCustomerReference($subscription_id, json_encode(array('card_exp_month' => $credit_card['exp_month'], 'card_exp_year' => $credit_card['exp_year'])));
                    $CI->recurring_model->SaveApiAuthNumber($subscription_id, $charge->getToken());
                    $CI->recurring_model->SaveApiPaymentReference($subscription_id, $charge->getTransactionReference());

                    $CI->load->model('order_authorization_model');
                    $CI->order_authorization_model->SaveAuthorization(
                        $order_id, // order_id
                        $charge->getTransactionReference(), // tran_id
                        $charge->getAuthCode(), // authorization_code
                        $charge->getToken() // security_key
                    );

                    $CI->charge_model->SetStatus($order_id, 1);
                    $response_array = array('charge_id' => $order_id, 'recurring_id' =>  $subscription_id);
                    $response = $CI->response->TransactionResponse(100, $response_array);
                } else {
                    // Failed Transaction
                    throw new Exception($charge->getMessage());
                }
            } catch (Exception $e) {
                $CI->recurring_model->MakeInactive($subscription_id);
                $CI->charge_model->SetStatus($order_id, 0);

                $response_array = array('reason' => $e->getMessage());
                $response = $CI->response->TransactionResponse(2, $response_array);
            }
        } else {
            // Authorize

            $omnipay = $this->LoadOmnipay($gateway);

            $card = new CreditCard(array(
                'firstName'     => $customer['first_name'],
                'lastName'      => $customer['last_name'],
                'email'     	=> $customer['email'],
                'number'        => $credit_card['card_num'],
                'expiryMonth'   => $credit_card['exp_month'],
                'expiryYear'    => $credit_card['exp_year'],
                'cvv'           => $credit_card['cvv']
            ));

            $data = array(
                'card'      => $card,
                'amount'    => $amount,
                'currency'  => $gateway['currency'],
                'firstname' => $customer['first_name'],
                'lastname'  => $customer['last_name'],
                'email'     => $customer['email'],
                'address1'  => isset($customer['address1']) ? $customer['address1'] : null,
                'address2'  => isset($customer['address2']) ? $customer['address2'] : null,
                'zip'       => isset($customer['postal_code']) ? $customer['postal_code'] : null,
                'state'     => isset($customer['state']) ? $customer['state'] : null,
                'country'   => isset($customer['country']) ? $customer['country'] : null
            );

            try {
                $auth = $omnipay->authorize($data)->send();

                if ($auth->isSuccessful()) {
                    // Successful Transaction
                    $CI->load->model('recurring_model');
                    // For SafeCharge:
                    // api_customer_reference = {card_exp_month: 07, card_exp_year:  2015}
                    // api_auth_number = token
                    // api_payment_reference = transactionId
                    $CI->recurring_model->SaveApiCustomerReference($subscription_id, json_encode(array('card_exp_month' => $credit_card['exp_month'], 'card_exp_year' => $credit_card['exp_year'])));
                    $CI->recurring_model->SaveApiAuthNumber($subscription_id, $auth->getToken());
                    $CI->recurring_model->SaveApiPaymentReference($subscription_id, $auth->getTransactionReference());

                    $response_array = array('recurring_id' => $subscription_id);
                    $response = $CI->response->TransactionResponse(100, $response_array);
                } else {
                    // Failed Transaction
                    throw new Exception($auth->getMessage());
                }
            } catch (Exception $e) {
                // Make the subscription inactive
                $CI->recurring_model->MakeInactive($subscription_id);

                $response_array = array('reason' => $e->getMessage());
                $response = $CI->response->TransactionResponse(2, $response_array);
            }
        }

        return $response;
    }

    //--------------------------------------------------------------------

    public function ChargeRecurring($client_id, $gateway, $order_id, $amount, $card_data, $token, $transaction_id)
    {
        $CI =& get_instance();

        $omnipay = $this->LoadOmnipay($gateway);

        $card_data = json_decode($card_data);

        $data = array(
            'amount'    => $amount,
            'currency'  => $gateway['currency'],
            'token'     => $token,
            'transactionId' => $transaction_id,
            'expMonth'  => $card_data->card_exp_month,
            'expYear'   => $card_data->card_exp_year
        );

        $response = array();

        try {
            $charge = $omnipay->purchase($data)->send();

            if ($charge->isSuccessful()) {
                // Successful Transaction
                $response['success'] = TRUE;

                $CI->load->model('recurring_model');
                // For SafeCharge:
                // api_customer_reference = {card_exp_month: 07, card_exp_year:  2015}
                // api_auth_number = token
                // api_payment_reference = transactionId
                $CI->recurring_model->SaveApiCustomerReference($subscription_id, json_encode(array('card_exp_month' => $card_data->exp_month, 'card_exp_year' => $card_data->exp_year)));
                $CI->recurring_model->SaveApiAuthNumber($subscription_id, $charge->getToken());
                $CI->recurring_model->SaveApiPaymentReference($subscription_id, $charge->getTransactionReference());

                $CI->load->model('order_authorization_model');
                $CI->order_authorization_model->SaveAuthorization(
                    $order_id, // order_id
                    $charge->getTransactionReference(), // tran_id
                    $charge->getAuthCode(), // authorization_code
                    $charge->getToken() // security_key
                );
            } else {
                // Failed Transaction
                throw new Exception($charge->getMessage());
            }
        } catch (Exception $e) {
            $response['success'] = FALSE;
            $response['reason'] = $e->getMessage();
        }

        return $response;
    }

    //--------------------------------------------------------------------

    public function AutoRecurringCharge($client_id, $order_id, $gateway, $params) {
        return $this->ChargeRecurring($client_id, $gateway, $order_id, $params['amount'], $params['api_customer_reference'], $params['api_auth_number'], $params['api_payment_reference']);
    }

    //--------------------------------------------------------------------

    public function UpdateRecurring($client_id, $gateway, $subscription, $customer, $params)
    {
        return true;
    }

    //--------------------------------------------------------------------

    public function CancelRecurring($client_id, $subscription)
    {
        return true;
    }

    //--------------------------------------------------------------------

    private function LoadOmnipay($gateway)
    {
        $omnipay = Omnipay::create('Safecharge');
        $omnipay->setUsername($gateway['username']);
        $omnipay->setPassword($gateway['password']);
        $omnipay->setVendorId($gateway['vendor_id']);
        $omnipay->setWebsiteId($gateway['website_id']);

        if (isset($gateway['descriptor'])) {
            $omnipay->setDescriptor($gateway['descriptor']);
        }

        if (isset($gateway['merchant_phone_number'])) {
            $omnipay->setMerchantPhoneNumber($gateway['merchant_phone_number']);
        }

        if (isset($gateway['merchant_name'])) {
            $omnipay->setMerchantName($gateway['merchant_name']);
        }

        if (isset($gateway['mode']) && $gateway['mode'] == 1) {
            $omnipay->setTestMode(false);
        } else {
            $omnipay->setTestMode(true);
        }

        return $omnipay;
    }

}
