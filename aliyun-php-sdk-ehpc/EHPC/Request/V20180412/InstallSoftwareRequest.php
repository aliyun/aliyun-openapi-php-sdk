<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InstallSoftware
 *
 * @method string getApplication()
 * @method string getClusterId()
 */
class InstallSoftwareRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'InstallSoftware',
            'ehs'
        );
    }

    /**
     * @param string $application
     *
     * @return $this
     */
    public function setApplication($application)
    {
        $this->requestParameters['Application'] = $application;
        $this->queryParameters['Application'] = $application;

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
}
