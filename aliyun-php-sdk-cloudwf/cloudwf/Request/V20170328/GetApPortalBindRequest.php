<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetApPortalBind
 *
 * @method string getConfigType()
 * @method string getBindId()
 */
class GetApPortalBindRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'GetApPortalBind',
            'cloudwf'
        );
    }

    /**
     * @param string $configType
     *
     * @return $this
     */
    public function setConfigType($configType)
    {
        $this->requestParameters['ConfigType'] = $configType;
        $this->queryParameters['ConfigType'] = $configType;

        return $this;
    }

    /**
     * @param string $bindId
     *
     * @return $this
     */
    public function setBindId($bindId)
    {
        $this->requestParameters['BindId'] = $bindId;
        $this->queryParameters['BindId'] = $bindId;

        return $this;
    }
}
