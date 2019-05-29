<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetRegion
 *
 * @method string getDomain()
 */
class GetRegionRequest extends \RoaAcsRequest
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
            'GetRegion',
            'cr'
        );
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->requestParameters['Domain'] = $domain;
        $this->queryParameters['Domain'] = $domain;

        return $this;
    }
}
