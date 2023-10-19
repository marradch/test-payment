<?php

namespace App\TestPayment\Contracts;

use App\TestPayment\Entities\SaleRequestEntity;
use Illuminate\Http\Client\Response;

interface TestPaymentAPIContract
{
    public function makeSaleRequest(SaleRequestEntity $entity): Response;
}
