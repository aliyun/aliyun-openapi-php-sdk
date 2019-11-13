<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ApplyInvoice
 *
 * @method string getInvoicingType()
 * @method string getProcessWay()
 * @method string getcallerBid()
 * @method string getOwnerId()
 * @method string getInvoiceAmount()
 * @method string getAddressId()
 * @method string getApplyUserNick()
 * @method string getInvoiceByAmount()
 * @method string getCustomerId()
 * @method array getSelectedIdss()
 * @method string getcallerUid()
 */
class ApplyInvoiceRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'BssOpenApi',
            '2017-12-14',
            'ApplyInvoice',
            'BssOpenApi'
        );
    }

    /**
     * @param string $invoicingType
     *
     * @return $this
     */
    public function setInvoicingType($invoicingType)
    {
        $this->requestParameters['InvoicingType'] = $invoicingType;
        $this->queryParameters['InvoicingType'] = $invoicingType;

        return $this;
    }

    /**
     * @param string $processWay
     *
     * @return $this
     */
    public function setProcessWay($processWay)
    {
        $this->requestParameters['ProcessWay'] = $processWay;
        $this->queryParameters['ProcessWay'] = $processWay;

        return $this;
    }

    /**
     * @param string $callerBid
     *
     * @return $this
     */
    public function setcallerBid($callerBid)
    {
        $this->requestParameters['callerBid'] = $callerBid;
        $this->queryParameters['callerBid'] = $callerBid;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $invoiceAmount
     *
     * @return $this
     */
    public function setInvoiceAmount($invoiceAmount)
    {
        $this->requestParameters['InvoiceAmount'] = $invoiceAmount;
        $this->queryParameters['InvoiceAmount'] = $invoiceAmount;

        return $this;
    }

    /**
     * @param string $addressId
     *
     * @return $this
     */
    public function setAddressId($addressId)
    {
        $this->requestParameters['AddressId'] = $addressId;
        $this->queryParameters['AddressId'] = $addressId;

        return $this;
    }

    /**
     * @param string $applyUserNick
     *
     * @return $this
     */
    public function setApplyUserNick($applyUserNick)
    {
        $this->requestParameters['ApplyUserNick'] = $applyUserNick;
        $this->queryParameters['ApplyUserNick'] = $applyUserNick;

        return $this;
    }

    /**
     * @param string $invoiceByAmount
     *
     * @return $this
     */
    public function setInvoiceByAmount($invoiceByAmount)
    {
        $this->requestParameters['InvoiceByAmount'] = $invoiceByAmount;
        $this->queryParameters['InvoiceByAmount'] = $invoiceByAmount;

        return $this;
    }

    /**
     * @param string $customerId
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->requestParameters['CustomerId'] = $customerId;
        $this->queryParameters['CustomerId'] = $customerId;

        return $this;
    }

    /**
     * @param array $selectedIds
     *
     * @return $this
     */
	public function setSelectedIdss(array $selectedIds)
	{
	    $this->requestParameters['SelectedIdss'] = $selectedIds;
		foreach ($selectedIds as $i => $iValue) {
			$this->queryParameters['SelectedIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $callerUid
     *
     * @return $this
     */
    public function setcallerUid($callerUid)
    {
        $this->requestParameters['callerUid'] = $callerUid;
        $this->queryParameters['callerUid'] = $callerUid;

        return $this;
    }
}
