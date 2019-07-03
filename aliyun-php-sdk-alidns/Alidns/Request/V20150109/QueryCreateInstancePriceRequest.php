<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryCreateInstancePrice
 *
 * @method string getMonth()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getInstanceVersion()
 * @method string getOwnerId()
 */
class QueryCreateInstancePriceRequest extends \RpcAcsRequest
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
            'QueryCreateInstancePrice',
            'Alidns'
        );
    }

    /**
     * @param string $month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->requestParameters['Month'] = $month;
        $this->queryParameters['Month'] = $month;

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

    /**
     * @param string $instanceVersion
     *
     * @return $this
     */
    public function setInstanceVersion($instanceVersion)
    {
        $this->requestParameters['InstanceVersion'] = $instanceVersion;
        $this->queryParameters['InstanceVersion'] = $instanceVersion;

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
}
