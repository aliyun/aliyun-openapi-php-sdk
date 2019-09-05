<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryMarketImages
 *
 * @method string getParam()
 */
class QueryMarketImagesRequest extends \RpcAcsRequest
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
            'Market',
            '2015-11-01',
            'QueryMarketImages',
            'yunmarket'
        );
    }

    /**
     * @param string $param
     *
     * @return $this
     */
    public function setParam($param)
    {
        $this->requestParameters['Param'] = $param;
        $this->queryParameters['Param'] = $param;

        return $this;
    }
}
