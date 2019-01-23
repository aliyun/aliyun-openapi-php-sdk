<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of CreateLogConfig
 *
 * @method string getSlsLogStore()
 * @method string getLogType()
 * @method string getSecurityToken()
 * @method string getSlsProject()
 */
class CreateLogConfigRequest extends \RpcAcsRequest
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
            'CreateLogConfig',
            'apigateway'
        );
    }

    /**
     * @param string $slsLogStore
     *
     * @return $this
     */
    public function setSlsLogStore($slsLogStore)
    {
        $this->requestParameters['SlsLogStore'] = $slsLogStore;
        $this->queryParameters['SlsLogStore'] = $slsLogStore;

        return $this;
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

    /**
     * @param string $slsProject
     *
     * @return $this
     */
    public function setSlsProject($slsProject)
    {
        $this->requestParameters['SlsProject'] = $slsProject;
        $this->queryParameters['SlsProject'] = $slsProject;

        return $this;
    }
}
