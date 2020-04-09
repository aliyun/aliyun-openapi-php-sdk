<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteAppResourceAlloc
 *
 * @method string getAppEnvId()
 */
class DeleteAppResourceAllocRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'DeleteAppResourceAlloc',
            'retailcloud'
        );
    }

    /**
     * @param string $appEnvId
     *
     * @return $this
     */
    public function setAppEnvId($appEnvId)
    {
        $this->requestParameters['AppEnvId'] = $appEnvId;
        $this->queryParameters['AppEnvId'] = $appEnvId;

        return $this;
    }
}
