<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetUserByExtension
 *
 * @method string getExtension()
 * @method string getInstanceId()
 */
class GetUserByExtensionRequest extends \RpcAcsRequest
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
            'GetUserByExtension',
            'CCC'
        );
    }

    /**
     * @param string $extension
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->requestParameters['Extension'] = $extension;
        $this->queryParameters['Extension'] = $extension;

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
}
