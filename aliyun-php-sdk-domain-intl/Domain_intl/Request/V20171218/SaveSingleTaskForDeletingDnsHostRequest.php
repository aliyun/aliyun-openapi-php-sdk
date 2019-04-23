<?php

namespace Domain_intl\Request\V20171218;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveSingleTaskForDeletingDnsHost
 *
 * @method string getInstanceId()
 * @method array getIps()
 * @method string getDnsName()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class SaveSingleTaskForDeletingDnsHostRequest extends \RpcAcsRequest
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
            'Domain-intl',
            '2017-12-18',
            'SaveSingleTaskForDeletingDnsHost',
            'domain'
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
