<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetCategoryChain
 *
 * @method string getItemId()
 * @method string getBizId()
 * @method string getCategoryId()
 */
class GetCategoryChainRequest extends \RpcAcsRequest
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
            'linkedmall',
            '2018-01-16',
            'GetCategoryChain',
            'linkedmall'
        );
    }

    /**
     * @param string $itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->requestParameters['ItemId'] = $itemId;
        $this->queryParameters['ItemId'] = $itemId;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $categoryId
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->requestParameters['CategoryId'] = $categoryId;
        $this->queryParameters['CategoryId'] = $categoryId;

        return $this;
    }
}
