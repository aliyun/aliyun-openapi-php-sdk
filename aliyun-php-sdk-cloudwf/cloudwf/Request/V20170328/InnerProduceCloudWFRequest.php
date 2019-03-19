<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InnerProduceCloudWF
 *
 * @method string getdata()
 */
class InnerProduceCloudWFRequest extends \RpcAcsRequest
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
            'InnerProduceCloudWF',
            'cloudwf'
        );
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function setdata($data)
    {
        $this->requestParameters['data'] = $data;
        $this->queryParameters['data'] = $data;

        return $this;
    }
}
