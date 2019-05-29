<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetSubUserList
 *
 */
class GetSubUserListRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/users/subAccount';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetSubUserList',
            'cr'
        );
    }
}
