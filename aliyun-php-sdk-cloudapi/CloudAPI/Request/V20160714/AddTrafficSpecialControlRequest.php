<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddTrafficSpecialControl
 *
 * @method string getTrafficControlId()
 * @method string getSpecialKey()
 * @method string getTrafficValue()
 * @method string getSecurityToken()
 * @method string getSpecialType()
 */
class AddTrafficSpecialControlRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'AddTrafficSpecialControl',
            'apigateway'
        );
    }

    /**
     * @param string $trafficControlId
     *
     * @return $this
     */
    public function setTrafficControlId($trafficControlId)
    {
        $this->requestParameters['TrafficControlId'] = $trafficControlId;
        $this->queryParameters['TrafficControlId'] = $trafficControlId;

        return $this;
    }

    /**
     * @param string $specialKey
     *
     * @return $this
     */
    public function setSpecialKey($specialKey)
    {
        $this->requestParameters['SpecialKey'] = $specialKey;
        $this->queryParameters['SpecialKey'] = $specialKey;

        return $this;
    }

    /**
     * @param string $trafficValue
     *
     * @return $this
     */
    public function setTrafficValue($trafficValue)
    {
        $this->requestParameters['TrafficValue'] = $trafficValue;
        $this->queryParameters['TrafficValue'] = $trafficValue;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $specialType
     *
     * @return $this
     */
    public function setSpecialType($specialType)
    {
        $this->requestParameters['SpecialType'] = $specialType;
        $this->queryParameters['SpecialType'] = $specialType;

        return $this;
    }
}
