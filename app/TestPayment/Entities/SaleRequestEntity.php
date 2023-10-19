<?php

namespace App\TestPayment\Entities;

class SaleRequestEntity
{
    protected ?string $channelId;
    protected string $orderId;
    protected float $orderAmount;
    protected string $orderCurrency;
    protected string $orderDescription;
    protected string $cardNumber;
    protected string $cardExpMonth;
    protected string $cardExpYear;
    protected string $cardCvv2;
    protected string $payerFirstName;
    protected string $payerLastName;
    protected string $payerAddress;
    protected string $payerCountry;
    protected string $payerCity;
    protected string $payerZip;
    protected string $payerEmail;
    protected string $payerPhone;
    protected string $payerIp;
    protected ?string $auth;

    public function setChannelId(string $channelId): self
    {
        $this->channelId = $channelId;

        return $this;
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function setOrderAmount(float $orderAmount): self
    {
        $this->orderAmount = $orderAmount;

        return $this;
    }

    public function setOrderCurrency(string $orderCurrency): self
    {
        $this->orderCurrency = $orderCurrency;

        return $this;
    }

    public function setOrderDescription(string $orderDescription): self
    {
        $this->orderDescription = $orderDescription;

        return $this;
    }

    public function setCardNumber(string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function setCardExpMonth(string $cardExpMonth): self
    {
        $this->cardExpMonth = $cardExpMonth;

        return $this;
    }

    public function setCardExpYear(string $cardExpYear): self
    {
        $this->cardExpYear = $cardExpYear;

        return $this;
    }

    public function setCardCvv2(string $cardCvv2): self
    {
        $this->cardCvv2 = $cardCvv2;

        return $this;
    }

    public function setPayerFirstName(string $payerFirstName): self
    {
        $this->payerFirstName = $payerFirstName;

        return $this;
    }

    public function setPayerLastName(string $payerLastName): self
    {
        $this->payerLastName = $payerLastName;

        return $this;
    }

    public function setPayerAddress(string $payerAddress): self
    {
        $this->payerAddress = $payerAddress;

        return $this;
    }

    public function setPayerZip(string $payerZip): self
    {
        $this->payerZip = $payerZip;

        return $this;
    }

    public function setPayerCountry(string $payerCountry): self
    {
        $this->payerCountry = $payerCountry;

        return $this;
    }

    public function setPayerCity(string $payerCity): self
    {
        $this->payerCity = $payerCity;

        return $this;
    }

    public function setPayerEmail(string $payerEmail): self
    {
        $this->payerEmail = $payerEmail;

        return $this;
    }

    public function setPayerPhone(string $payerPhone): self
    {
        $this->payerPhone = $payerPhone;

        return $this;
    }

    public function setPayerIp(string $payerIp): self
    {
        $this->payerIp = $payerIp;

        return $this;
    }

    public function setAuth(string $auth): self
    {
        $this->auth = $auth;

        return $this;
    }

    public function getChannelId(): string
    {
        return $this->channelId;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getOrderAmount(): float
    {
        return $this->orderAmount;
    }

    public function getOrderCurrency(): string
    {
        return $this->orderCurrency;
    }

    public function getOrderDescription(): string
    {
        return $this->orderDescription;
    }

    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    public function getCardExpMonth(): string
    {
        return $this->cardExpMonth;
    }

    public function getCardExpYear(): string
    {
        return $this->cardExpYear;
    }

    public function getCardCvv2(): string
    {
        return $this->cardCvv2;
    }

    public function getPayerFirstName(): string
    {
        return $this->payerFirstName;
    }

    public function getPayerLastName(): string
    {
        return $this->payerLastName;
    }

    public function getPayerAddress(): string
    {
        return $this->payerAddress;
    }

    public function getPayerZip(): string
    {
        return $this->payerZip;
    }

    public function getPayerCountry(): string
    {
        return $this->payerCountry;
    }

    public function getPayerCity(): string
    {
        return $this->payerCity;
    }

    public function getPayerEmail(): string
    {
        return $this->payerEmail;
    }

    public function getPayerPhone(): string
    {
        return $this->payerPhone;
    }

    public function getPayerIp(): string
    {
        return $this->payerIp;
    }

    public function getAuth(): string
    {
        return $this->auth;
    }
}
