<?php

namespace Ons\Request\V20190214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of OnsInstanceInServiceList
 *
 * @method string getPreventCache()
 */
class OnsInstanceInServiceListRequest extends \RpcAcsRequest
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
            'Ons',
            '2019-02-14',
            'OnsInstanceInServiceList',
            'ons'
        );
    }

    /**
     * @param string $preventCache
     *
     * @return $this
     */
    public function setPreventCache($preventCache)
    {
        $this->requestParameters['PreventCache'] = $preventCache;
        $this->queryParameters['PreventCache'] = $preventCache;

        return $this;
    }
}
