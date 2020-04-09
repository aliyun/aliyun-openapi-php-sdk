<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeAppResourceAlloc
 *
 * @method string getAppEnvId()
 */
class DescribeAppResourceAllocRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'retailcloud',
            '2018-03-13',
            'DescribeAppResourceAlloc',
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
