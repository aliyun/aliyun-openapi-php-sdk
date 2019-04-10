<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StopVisualService
 *
 * @method string getPort()
 * @method string getClusterId()
 * @method string getCidrIp()
 */
class StopVisualServiceRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'StopVisualService',
            'ehs'
        );
    }

    /**
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->requestParameters['Port'] = $port;
        $this->queryParameters['Port'] = $port;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $cidrIp
     *
     * @return $this
     */
    public function setCidrIp($cidrIp)
    {
        $this->requestParameters['CidrIp'] = $cidrIp;
        $this->queryParameters['CidrIp'] = $cidrIp;

        return $this;
    }
}
