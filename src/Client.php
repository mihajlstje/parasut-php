<?php

declare(strict_types=1);

namespace Leventcz\Parasut;

use Leventcz\Parasut\Http\HttpClientInterface;
use Leventcz\Parasut\Resources\BankFee;
use Leventcz\Parasut\Resources\Contact;
use Leventcz\Parasut\Resources\PurchaseBill;
use Leventcz\Parasut\Resources\SalesInvoice;

readonly class Client
{
    /**
     * @param  HttpClientInterface  $httpClient
     */
    public function __construct(private HttpClientInterface $httpClient)
    {
    }

    /**
     * @return SalesInvoice
     */
    public function salesInvoice(): SalesInvoice
    {
        return new SalesInvoice($this->httpClient);
    }

    /**
     * @return Contact
     */
    public function contact(): Contact
    {
        return new Contact($this->httpClient);
    }

    /**
     * @return PurchaseBill
     */
    public function purchaseBill(): PurchaseBill
    {
        return new PurchaseBill($this->httpClient);
    }

    /**
     * @return BankFee
     */
    public function bankFee(): BankFee
    {
        return new BankFee($this->httpClient);
    }
}
