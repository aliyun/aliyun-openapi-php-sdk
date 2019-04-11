<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetAuditSecurityIp
 *
 * @method string getOperateMode()
 * @method string getSecurityGroupName()
 * @method string getIps()
 */
class SetAuditSecurityIpRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'SetAuditSecurityIp',
            'vod'
        );
    }

    /**
     * @param string $operateMode
     *
     * @return $this
     */
    public function setOperateMode($operateMode)
    {
        $this->requestParameters['OperateMode'] = $operateMode;
        $this->queryParameters['OperateMode'] = $operateMode;

        return $this;
    }

    /**
     * @param string $securityGroupName
     *
     * @return $this
     */
    public function setSecurityGroupName($securityGroupName)
    {
        $this->requestParameters['SecurityGroupName'] = $securityGroupName;
        $this->queryParameters['SecurityGroupName'] = $securityGroupName;

        return $this;
    }

    /**
     * @param string $ips
     *
     * @return $this
     */
    public function setIps($ips)
    {
        $this->requestParameters['Ips'] = $ips;
        $this->queryParameters['Ips'] = $ips;

        return $this;
    }
}
