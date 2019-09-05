<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteTrafficControl
 *
 * @method string getTrafficControlId()
 * @method string getSecurityToken()
 */
class DeleteTrafficControlRequest extends \RpcAcsRequest
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
            'DeleteTrafficControl',
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
}
