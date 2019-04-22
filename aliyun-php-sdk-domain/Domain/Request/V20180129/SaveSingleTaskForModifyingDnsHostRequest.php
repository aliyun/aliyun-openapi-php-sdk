<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveSingleTaskForModifyingDnsHost
 *
 * @method string getInstanceId()
 * @method array getIps()
 * @method string getDnsName()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class SaveSingleTaskForModifyingDnsHostRequest extends \RpcAcsRequest
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
            '2018-01-29',
            'SaveSingleTaskForModifyingDnsHost'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param array $ip
     *
     * @return $this
     */
    public function setIps(array $ip)
    {
        $this->requestParameters['Ips'] = $ip;
        foreach ($ip as $i => $iValue) {
            $this->queryParameters['Ip.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $dnsName
     *
     * @return $this
     */
    public function setDnsName($dnsName)
    {
        $this->requestParameters['DnsName'] = $dnsName;
        $this->queryParameters['DnsName'] = $dnsName;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
