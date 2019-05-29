<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateUserInfo
 *
 */
class UpdateUserInfoRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/users';

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
            'cr',
            '2016-06-07',
            'UpdateUserInfo',
            'cr'
        );
    }
}
