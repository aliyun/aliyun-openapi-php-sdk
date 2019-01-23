<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of DescribeLogConfig
 *
 * @method string getLogType()
 * @method string getSecurityToken()
 */
class DescribeLogConfigRequest extends \RpcAcsRequest
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
            'DescribeLogConfig',
            'apigateway'
        );
    }

    /**
     * @param string $logType
     *
     * @return $this
     */
    public function setLogType($logType)
    {
        $this->requestParameters['LogType'] = $logType;
        $this->queryParameters['LogType'] = $logType;

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
