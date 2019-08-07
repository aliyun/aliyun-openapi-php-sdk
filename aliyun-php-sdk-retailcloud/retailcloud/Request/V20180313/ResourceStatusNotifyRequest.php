<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ResourceStatusNotify
 *
 * @method string getdata()
 */
class ResourceStatusNotifyRequest extends \RpcAcsRequest
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
            'ResourceStatusNotify',
            'retailcloud'
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
