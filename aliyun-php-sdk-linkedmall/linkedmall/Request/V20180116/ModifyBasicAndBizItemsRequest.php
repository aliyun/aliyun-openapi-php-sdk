<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyBasicAndBizItems
 *
 * @method string getBizId()
 * @method array getItemLists()
 * @method string getSubBizId()
 */
class ModifyBasicAndBizItemsRequest extends \RpcAcsRequest
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
            'ModifyBasicAndBizItems',
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
     * @param array $itemList
     *
     * @return $this
     */
    public function setItemLists(array $itemList)
    {
        $this->requestParameters['ItemLists'] = $itemList;
        foreach ($itemList as $depth1 => $depth1Value) {
            $this->queryParameters['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
            foreach ($depth1Value['SkuList'] as $depth2 => $depth2Value) {
                $this->queryParameters['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.StatusAction'] = $depth2Value['StatusAction'];
                $this->queryParameters['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.PriceCent'] = $depth2Value['PriceCent'];
                $this->queryParameters['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.PointsAmount'] = $depth2Value['PointsAmount'];
                $this->queryParameters['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.Quantity'] = $depth2Value['Quantity'];
                $this->queryParameters['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.BenefitId'] = $depth2Value['BenefitId'];
                $this->queryParameters['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.SkuId'] = $depth2Value['SkuId'];
                $this->queryParameters['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.SupplierPrice'] = $depth2Value['SupplierPrice'];
                $this->queryParameters['ItemList.' . ($depth1 + 1) . '.SkuList.' . ($depth2 + 1) . '.Points'] = $depth2Value['Points'];
            }
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
