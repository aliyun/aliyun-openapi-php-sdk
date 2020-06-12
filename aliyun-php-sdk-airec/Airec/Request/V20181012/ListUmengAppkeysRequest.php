<?php

namespace Airec\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListUmengAppkeys
 *
 */
class ListUmengAppkeysRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/openapi/umeng/appkeys';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Airec',
            '2018-10-12',
            'ListUmengAppkeys',
            'airec'
        );
    }
}
