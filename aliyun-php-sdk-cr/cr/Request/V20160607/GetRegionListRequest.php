<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetRegionList
 *
 */
class GetRegionListRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/regions';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetRegionList',
            'cr'
        );
    }
}
