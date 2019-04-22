<?php

namespace Domain\Request\V20180208;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RequestPayDemand
 *
 * @method string getPrice()
 * @method string getBizId()
 * @method string getDomainName()
 * @method string getProduceType()
 * @method string getMessage()
 */
class RequestPayDemandRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-02-08',
            'RequestPayDemand'
        );
    }

    /**
     * @param string $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->requestParameters['Price'] = $price;
        $this->queryParameters['Price'] = $price;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $produceType
     *
     * @return $this
     */
    public function setProduceType($produceType)
    {
        $this->requestParameters['ProduceType'] = $produceType;
        $this->queryParameters['ProduceType'] = $produceType;

        return $this;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->requestParameters['Message'] = $message;
        $this->queryParameters['Message'] = $message;

        return $this;
    }
}
