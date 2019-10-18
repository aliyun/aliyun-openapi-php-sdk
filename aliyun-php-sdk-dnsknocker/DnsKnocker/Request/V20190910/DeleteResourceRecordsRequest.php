<?php

namespace DnsKnocker\Request\V20190910;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteResourceRecords
 *
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getTypeList()
 * @method string getLine()
 * @method string getDomainName()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 */
class DeleteResourceRecordsRequest extends \RpcAcsRequest
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
            'DeleteResourceRecords',
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
     * @param string $typeList
     *
     * @return $this
     */
    public function setTypeList($typeList)
    {
        $this->requestParameters['TypeList'] = $typeList;
        $this->queryParameters['TypeList'] = $typeList;

        return $this;
    }

    /**
     * @param string $line
     *
     * @return $this
     */
    public function setLine($line)
    {
        $this->requestParameters['Line'] = $line;
        $this->queryParameters['Line'] = $line;

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
}
