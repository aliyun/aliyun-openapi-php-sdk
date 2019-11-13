<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateGtmInstanceGlobalConfig
 *
 * @method string getAlertGroup()
 * @method string getCnameMode()
 * @method string getLbaStrategy()
 * @method string getTtl()
 * @method string getCnameCustomDomainName()
 * @method string getInstanceId()
 * @method string getInstanceName()
 * @method string getUserDomainName()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class UpdateGtmInstanceGlobalConfigRequest extends \RpcAcsRequest
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
            'Alidns',
            '2015-01-09',
            'UpdateGtmInstanceGlobalConfig',
            'alidns'
        );
    }

    /**
     * @param string $alertGroup
     *
     * @return $this
     */
    public function setAlertGroup($alertGroup)
    {
        $this->requestParameters['AlertGroup'] = $alertGroup;
        $this->queryParameters['AlertGroup'] = $alertGroup;

        return $this;
    }

    /**
     * @param string $cnameMode
     *
     * @return $this
     */
    public function setCnameMode($cnameMode)
    {
        $this->requestParameters['CnameMode'] = $cnameMode;
        $this->queryParameters['CnameMode'] = $cnameMode;

        return $this;
    }

    /**
     * @param string $lbaStrategy
     *
     * @return $this
     */
    public function setLbaStrategy($lbaStrategy)
    {
        $this->requestParameters['LbaStrategy'] = $lbaStrategy;
        $this->queryParameters['LbaStrategy'] = $lbaStrategy;

        return $this;
    }

    /**
     * @param string $ttl
     *
     * @return $this
     */
    public function setTtl($ttl)
    {
        $this->requestParameters['Ttl'] = $ttl;
        $this->queryParameters['Ttl'] = $ttl;

        return $this;
    }

    /**
     * @param string $cnameCustomDomainName
     *
     * @return $this
     */
    public function setCnameCustomDomainName($cnameCustomDomainName)
    {
        $this->requestParameters['CnameCustomDomainName'] = $cnameCustomDomainName;
        $this->queryParameters['CnameCustomDomainName'] = $cnameCustomDomainName;

        return $this;
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
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $userDomainName
     *
     * @return $this
     */
    public function setUserDomainName($userDomainName)
    {
        $this->requestParameters['UserDomainName'] = $userDomainName;
        $this->queryParameters['UserDomainName'] = $userDomainName;

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
