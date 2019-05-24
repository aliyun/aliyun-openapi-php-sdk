<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteBizItems
 *
 * @method string getBizId()
 * @method array getItemIdLists()
 * @method string getSubBizId()
 */
class DeleteBizItemsRequest extends \RpcAcsRequest
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
            'DeleteBizItems',
            'linkedmall'
        );
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
     * @param array $itemIdList
     *
     * @return $this
     */
    public function setItemIdLists(array $itemIdList)
    {
        $this->requestParameters['ItemIdLists'] = $itemIdList;
        foreach ($itemIdList as $i => $iValue) {
            $this->queryParameters['ItemIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $subBizId
     *
     * @return $this
     */
    public function setSubBizId($subBizId)
    {
        $this->requestParameters['SubBizId'] = $subBizId;
        $this->queryParameters['SubBizId'] = $subBizId;

        return $this;
    }
}
