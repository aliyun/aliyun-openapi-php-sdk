<?php

namespace DnsKnocker\Request\V20190910;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateResourceRecord
 *
 * @method string getAccessID()
 * @method string getRrTTL()
 * @method string getAccessSecret()
 * @method string getRrLine()
 * @method string getDomainName()
 * @method string getRrValue()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 * @method string getRrType()
 */
class CreateResourceRecordRequest extends \RpcAcsRequest
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
            'DnsKnocker',
            '2019-09-10',
            'CreateResourceRecord',
            'dns_knocker'
        );
    }

    /**
     * @param string $accessID
     *
     * @return $this
     */
    public function setAccessID($accessID)
    {
        $this->requestParameters['AccessID'] = $accessID;
        $this->queryParameters['AccessID'] = $accessID;

        return $this;
    }

    /**
     * @param string $rrTTL
     *
     * @return $this
     */
    public function setRrTTL($rrTTL)
    {
        $this->requestParameters['RrTTL'] = $rrTTL;
        $this->queryParameters['RrTTL'] = $rrTTL;

        return $this;
    }

    /**
     * @param string $accessSecret
     *
     * @return $this
     */
    public function setAccessSecret($accessSecret)
    {
        $this->requestParameters['AccessSecret'] = $accessSecret;
        $this->queryParameters['AccessSecret'] = $accessSecret;

        return $this;
    }

    /**
     * @param string $rrLine
     *
     * @return $this
     */
    public function setRrLine($rrLine)
    {
        $this->requestParameters['RrLine'] = $rrLine;
        $this->queryParameters['RrLine'] = $rrLine;

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
     * @param string $rrValue
     *
     * @return $this
     */
    public function setRrValue($rrValue)
    {
        $this->requestParameters['RrValue'] = $rrValue;
        $this->queryParameters['RrValue'] = $rrValue;

        return $this;
    }

    /**
     * @param string $zoneName
     *
     * @return $this
     */
    public function setZoneName($zoneName)
    {
        $this->requestParameters['ZoneName'] = $zoneName;
        $this->queryParameters['ZoneName'] = $zoneName;

        return $this;
    }

    /**
     * @param string $transactionId
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->requestParameters['TransactionId'] = $transactionId;
        $this->queryParameters['TransactionId'] = $transactionId;

        return $this;
    }

    /**
     * @param string $group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->requestParameters['Group'] = $group;
        $this->queryParameters['Group'] = $group;

        return $this;
    }

    /**
     * @param string $rrType
     *
     * @return $this
     */
    public function setRrType($rrType)
    {
        $this->requestParameters['RrType'] = $rrType;
        $this->queryParameters['RrType'] = $rrType;

        return $this;
    }
}
