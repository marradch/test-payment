<?php

namespace App\TestPayment\Services;

use App\TestPayment\Contracts\TestPaymentAPIContract;
use App\TestPayment\Entities\SaleRequestEntity;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class TestPaymentAPIService implements TestPaymentAPIContract
{
    protected const SALE_ACTION = 'SALE';

    protected function buildHash(SaleRequestEntity $entity)
    {
        return md5(strtoupper(strrev($entity->getPayerEmail())
                . env('TEST_PAYMENT_API_PASS'))
                . strrev(substr($entity->getCardNumber(),0,6)
                . substr($entity->getCardNumber(),-4))
        );
    }

    public function makeSaleRequest(SaleRequestEntity $entity): Response
    {
        if (!env('TEST_PAYMENT_API_URL')
            || !env('TEST_PAYMENT_API_KEY')
            || !env('TEST_PAYMENT_API_PASS')) {
            throw new \Exception('Not configured');
        }

        return Http::asForm()->post(env('TEST_PAYMENT_API_URL'), [
            'action' => self::SALE_ACTION,
            'client_key' => env('TEST_PAYMENT_API_KEY'),
            'order_id' => $entity->getOrderId(),
            'order_amount' => $entity->getOrderAmount(),
            'order_currency' => $entity->getOrderCurrency(),
            'order_description' => $entity->getOrderDescription(),
            'card_number' => $entity->getCardNumber(),
            'card_exp_month' => $entity->getCardExpMonth(),
            'card_exp_year' => $entity->getCardExpYear(),
            'card_cvv2' => $entity->getCardCvv2(),
            'payer_first_name' => $entity->getPayerFirstName(),
            'payer_last_name' => $entity->getPayerLastName(),
            'payer_address' => $entity->getPayerAddress(),
            'payer_country' => $entity->getPayerCountry(),
            'payer_city' => $entity->getPayerCity(),
            'payer_zip' => $entity->getPayerZip(),
            'payer_email' => $entity->getPayerEmail(),
            'payer_phone' => $entity->getPayerPhone(),
            'payer_ip' => $entity->getPayerIp(),
            'term_url_3ds' => env('APP_URL'),
            'hash' => $this->buildHash($entity),
        ]);
    }
}
