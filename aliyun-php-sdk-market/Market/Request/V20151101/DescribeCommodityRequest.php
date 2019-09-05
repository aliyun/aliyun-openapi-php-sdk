<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeCommodity
 *
 * @method string getCommodityId()
 */
class DescribeCommodityRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Market',
            '2015-11-01',
            'DescribeCommodity',
            'yunmarket'
        );
    }

    /**
     * @param string $commodityId
     *
     * @return $this
     */
    public function setCommodityId($commodityId)
    {
        $this->requestParameters['CommodityId'] = $commodityId;
        $this->queryParameters['CommodityId'] = $commodityId;

        return $this;
    }
}
