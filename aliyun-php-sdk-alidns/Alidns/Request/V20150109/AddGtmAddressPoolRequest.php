<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddGtmAddressPool
 *
 * @method string getInstanceId()
 * @method string getUserClientIp()
 * @method string getName()
 * @method string getLang()
 * @method string getType()
 * @method array getAddrs()
 * @method string getMinAvailableAddrNum()
 */
class AddGtmAddressPoolRequest extends \RpcAcsRequest
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
            'AddGtmAddressPool',
            'alidns'
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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setAddrs(array $value)
    {
        $this->requestParameters['Addrs'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['Addr.' . ($i + 1) . '.Mode'] = $value[$i]['Mode'];
            $this->queryParameters['Addr.' . ($i + 1) . '.LbaWeight'] = $value[$i]['LbaWeight'];
            $this->queryParameters['Addr.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param string $minAvailableAddrNum
     *
     * @return $this
     */
    public function setMinAvailableAddrNum($minAvailableAddrNum)
    {
        $this->requestParameters['MinAvailableAddrNum'] = $minAvailableAddrNum;
        $this->queryParameters['MinAvailableAddrNum'] = $minAvailableAddrNum;

        return $this;
    }
}
