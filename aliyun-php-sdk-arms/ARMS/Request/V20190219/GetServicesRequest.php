<?php

namespace ARMS\Request\V20190219;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetServices
 *
 * @method string getAppType()
 */
class GetServicesRequest extends \RpcAcsRequest
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
            'ARMS',
            '2019-02-19',
            'GetServices'
        );
    }

    /**
     * @param string $appType
     *
     * @return $this
     */
    public function setAppType($appType)
    {
        $this->requestParameters['AppType'] = $appType;
        $this->queryParameters['AppType'] = $appType;

        return $this;
    }
}
