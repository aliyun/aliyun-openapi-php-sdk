<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddAgentDevice
 *
 * @method string getRemark()
 * @method string getClientPort()
 * @method string getInstanceId()
 * @method string getClientIp()
 * @method string getBrowserVersion()
 */
class AddAgentDeviceRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'AddAgentDevice'
        );
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->requestParameters['Remark'] = $remark;
        $this->queryParameters['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $clientPort
     *
     * @return $this
     */
    public function setClientPort($clientPort)
    {
        $this->requestParameters['ClientPort'] = $clientPort;
        $this->queryParameters['ClientPort'] = $clientPort;

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
     * @param string $clientIp
     *
     * @return $this
     */
    public function setClientIp($clientIp)
    {
        $this->requestParameters['ClientIp'] = $clientIp;
        $this->queryParameters['ClientIp'] = $clientIp;

        return $this;
    }

    /**
     * @param string $browserVersion
     *
     * @return $this
     */
    public function setBrowserVersion($browserVersion)
    {
        $this->requestParameters['BrowserVersion'] = $browserVersion;
        $this->queryParameters['BrowserVersion'] = $browserVersion;

        return $this;
    }
}
