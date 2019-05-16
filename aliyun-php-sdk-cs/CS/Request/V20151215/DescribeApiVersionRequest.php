<?php

namespace CS\Request\V20151215;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeApiVersion
 *
 */
class DescribeApiVersionRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/version';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CS',
            '2015-12-15',
            'DescribeApiVersion'
        );
    }
}
