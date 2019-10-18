<?php

namespace DnsKnocker\Request\V20190910;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ChangeResourceRecord
 *
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getNewRRInfo()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 * @method string getOldRRInfo()
 */
class ChangeResourceRecordRequest extends \RpcAcsRequest
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
            'ChangeResourceRecord',
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
     * @param string $newRRInfo
     *
     * @return $this
     */
    public function setNewRRInfo($newRRInfo)
    {
        $this->requestParameters['NewRRInfo'] = $newRRInfo;
        $this->queryParameters['NewRRInfo'] = $newRRInfo;

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
     * @param string $oldRRInfo
     *
     * @return $this
     */
    public function setOldRRInfo($oldRRInfo)
    {
        $this->requestParameters['OldRRInfo'] = $oldRRInfo;
        $this->queryParameters['OldRRInfo'] = $oldRRInfo;

        return $this;
    }
}
