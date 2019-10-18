<?php

namespace DnsKnocker\Request\V20190910;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteResourceRecord
 *
 * @method string getAccessID()
 * @method string getRRTTL()
 * @method string getAccessSecret()
 * @method string getRRLine()
 * @method string getDomainName()
 * @method string getRRValue()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 * @method string getRRType()
 */
class DeleteResourceRecordRequest extends \RpcAcsRequest
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
            'DeleteResourceRecord',
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
     * @param string $rRTTL
     *
     * @return $this
     */
    public function setRRTTL($rRTTL)
    {
        $this->requestParameters['RRTTL'] = $rRTTL;
        $this->queryParameters['RRTTL'] = $rRTTL;

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
     * @param string $rRLine
     *
     * @return $this
     */
    public function setRRLine($rRLine)
    {
        $this->requestParameters['RRLine'] = $rRLine;
        $this->queryParameters['RRLine'] = $rRLine;

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
     * @param string $rRValue
     *
     * @return $this
     */
    public function setRRValue($rRValue)
    {
        $this->requestParameters['RRValue'] = $rRValue;
        $this->queryParameters['RRValue'] = $rRValue;

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
     * @param string $rRType
     *
     * @return $this
     */
    public function setRRType($rRType)
    {
        $this->requestParameters['RRType'] = $rRType;
        $this->queryParameters['RRType'] = $rRType;

        return $this;
    }
}
