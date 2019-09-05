<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateCommodity
 *
 * @method string getCommodityId()
 * @method string getContent()
 */
class UpdateCommodityRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Market',
            '2015-11-01',
            'UpdateCommodity',
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

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->requestParameters['Content'] = $content;
        $this->queryParameters['Content'] = $content;

        return $this;
    }
}
