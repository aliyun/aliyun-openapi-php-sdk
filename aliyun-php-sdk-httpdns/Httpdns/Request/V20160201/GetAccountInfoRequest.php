<?php

namespace Httpdns\Request\V20160201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetAccountInfo
 *
 */
class GetAccountInfoRequest extends \RpcAcsRequest
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
            'Httpdns',
            '2016-02-01',
            'GetAccountInfo',
            'httpdns'
        );
    }
}
