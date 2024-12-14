<?php

namespace Core;

// Protect direct access
defined('ROOTPATH') or exit('Access denied');

class Payment {
    protected $secret_key;

    public function __construct() {
        $this->secret_key = 'sk_test_51QRD3Q006VNadgQuLV1JP0OPIpcesx0a3bcnYu4BWje6QUNthvf4DEKzEy4CvJktxSNx4FfqLxCoVEMDWN47wpIL00fjn9ScHt';
        \Stripe\Stripe::setApiKey($this->secret_key);
    }

    public function createPaymentIntent($amount, $currency) {
        try {
            // Create a PaymentIntent
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $amount,
                'currency' => $currency,
            ]);
            return ['clientSecret' => $paymentIntent->client_secret];
        } catch (\Stripe\Exception\ApiErrorException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}

?>
