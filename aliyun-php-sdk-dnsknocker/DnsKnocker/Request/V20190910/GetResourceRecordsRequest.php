<?php

namespace DnsKnocker\Request\V20190910;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetResourceRecords
 *
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getZone()
 * @method string getDomainName()
 * @method string getTransactionId()
 * @method string getDomainLine()
 * @method string getGroup()
 */
class GetResourceRecordsRequest extends \RpcAcsRequest
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
            'GetResourceRecords',
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
     * @param string $zone
     *
     * @return $this
     */
    public function setZone($zone)
    {
        $this->requestParameters['Zone'] = $zone;
        $this->queryParameters['Zone'] = $zone;

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
     * @param string $domainLine
     *
     * @return $this
     */
    public function setDomainLine($domainLine)
    {
        $this->requestParameters['DomainLine'] = $domainLine;
        $this->queryParameters['DomainLine'] = $domainLine;

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
}
