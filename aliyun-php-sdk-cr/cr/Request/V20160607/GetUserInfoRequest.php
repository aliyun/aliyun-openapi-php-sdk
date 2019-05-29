<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetUserInfo
 *
 */
class GetUserInfoRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/users';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetUserInfo',
            'cr'
        );
    }
}
