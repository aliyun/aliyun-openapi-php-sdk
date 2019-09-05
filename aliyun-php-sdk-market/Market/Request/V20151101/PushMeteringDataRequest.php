<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PushMeteringData
 *
 * @method string getMetering()
 */
class PushMeteringDataRequest extends \RpcAcsRequest
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
            'Market',
            '2015-11-01',
            'PushMeteringData',
            'yunmarket'
        );
    }

    /**
     * @param string $metering
     *
     * @return $this
     */
    public function setMetering($metering)
    {
        $this->requestParameters['Metering'] = $metering;
        $this->queryParameters['Metering'] = $metering;

        return $this;
    }
}
