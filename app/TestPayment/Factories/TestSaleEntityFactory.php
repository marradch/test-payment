<?php

namespace App\TestPayment\Factories;

use App\TestPayment\Entities\SaleRequestEntity;

class TestSaleEntityFactory
{
    public function make()
    {
        return (new SaleRequestEntity())
            ->setOrderId('ORDER-12345')
            ->setOrderAmount(1.99)
            ->setOrderCurrency('USD')
            ->setOrderDescription('Product')
            ->setCardNumber('4111111111111111')
            ->setCardExpMonth('01')
            ->setCardExpYear('2025')
            ->setCardCvv2('000')
            ->setPayerFirstName('John')
            ->setPayerLastName('Doe')
            ->setPayerAddress('Big street')
            ->setPayerCountry('US')
            ->setPayerCity('City')
            ->setPayerZip('123456')
            ->setPayerEmail('doe@example.com')
            ->setPayerPhone('199999999')
            ->setPayerIp('123.123.123.123')
        ;
    }
}
